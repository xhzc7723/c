<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <!-- @xiaohan7723开发 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>你好</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* @xiaohan7723开发 */
        body {
            width: 100vw;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #f5f5f5;
            font-family: "Microsoft YaHei", sans-serif;
        }

        /* @xiaohan7723开发 */
        .loading-circle {
            width: 40px;
            height: 40px;
            border: 4px solid #e0e0e0;
            border-top: 4px solid #2196F3; /* 高亮色，可修改 */
            border-radius: 50%;
            animation: rotate 1s linear infinite; /* 无限旋转动画 */
            margin-bottom: 16px;
        }

        /* @xiaohan7723开发 */
        @keyframes rotate {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        /* @xiaohan7723开发 */
        .loading-text {
            font-size: 16px;
            color: #666666;
        }

        /* @xiaohan7723开发 */
        .jump-link {
            display: none;
        }
    </style>
</head>
<body>
    <!-- 加载动画容器 -->
    <div class="loading-circle"></div>
    <div class="loading-text">正在加载中，请稍候...</div>

    <!-- @xiaohan7723开发 -->
    <a href="https://www.example.com" target="_self" class="jump-link" id="jumpLink"></a>

    <script>
        // 修改为你的目标跳转地址
        const TARGET_URL = "https://xiaohan7723.cn"; // 替换成实际跳转地址
        const JUMP_DELAY = 500; // 跳转延迟（毫秒）

        // 页面加载完成后执行跳转逻辑
        window.onload = function() {
            const jumpLink = document.getElementById("jumpLink");
            jumpLink.href = TARGET_URL;

            // @xiaohan7723开发
            setTimeout(function() {
                // @xiaohan7723开发
                const clickEvent = new MouseEvent("click", {
                    bubbles: true,
                    cancelable: true,
                    view: window
                });
                jumpLink.dispatchEvent(clickEvent);

                // @xiaohan7723开发
                setTimeout(function() {
                    if (window.location.href !== TARGET_URL) {
                        window.location.href = TARGET_URL;
                    }
                }, 1000);
            }, JUMP_DELAY);
        };
    </script>
</body>
</html>
