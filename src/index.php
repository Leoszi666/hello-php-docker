<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moving ASCII Deployment</title>
    <style>
        body {
            background-color: #030712;
            color: #38bdf8;
            font-family: 'Courier New', Courier, monospace;
            height: 100vh;
            margin: 0;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            box-sizing: border-box;
            padding: 20px;
        }

        .marquee-wrapper {
            flex-grow: 1;
            display: flex;
            align-items: center;
            position: relative;
            width: 100%;
        }


        .ascii-marquee {
            position: absolute;
            white-space: pre;
            font-weight: bold;
            line-height: 1.1;
            font-size: 1.1vw; 
            animation: moveAround 12s linear infinite, changeColor 6s ease-in-out infinite;
        }

        @keyframes moveAround {
            0% { transform: translateX(100vw); }
            100% { transform: translateX(-100%); }
        }


        @keyframes changeColor {
            0% { color: #38bdf8; text-shadow: 0 0 12px #38bdf8; }
            33% { color: #a855f7; text-shadow: 0 0 12px #a855f7; }
            66% { color: #f43f5e; text-shadow: 0 0 12px #f43f5e; }
            100% { color: #38bdf8; text-shadow: 0 0 12px #38bdf8; }
        }

        
        .dashboard-panel {
            background: rgba(15, 23, 42, 0.8);
            border: 1px solid #1e293b;
            border-top: 2px solid #38bdf8;
            padding: 15px 25px;
            border-radius: 6px;
            font-size: 0.9rem;
            color: #94a3b8;
            backdrop-filter: blur(4px);
            z-index: 10;
            box-shadow: 0 -10px 25px rgba(0,0,0,0.3);
        }
        .status-dot {
            display: inline-block;
            width: 8px;
            height: 8px;
            background-color: #22c55e;
            border-radius: 50%;
            margin-right: 6px;
            animation: pulse 1.5s infinite;
        }
        @keyframes pulse { 50% { opacity: 0.4; } }
    </style>
</head>
<body>

    <div class="marquee-wrapper">
        <pre class="ascii-marquee">
 _   _      _ _         __        __         _     _ _ 
| | | | ___| | | ___    \ \      / /__  _ __| | __| | |
| |_| |/ _ \ | |/ _ \    \ \ /\ / / _ \| '__| |/ _` | |
|  _  |  __/ | | (_) |    \ V  V / (_) | |  | | (_| |_|
|_| |_|\___|_|_|\___/      \_/\_/ \___/|_|  |_|\__,_(_)
        </pre>
    </div>


</body>
</html>
