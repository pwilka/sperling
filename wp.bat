@echo off
REM WP-CLI wrapper for Windows
REM This file allows you to run "wp" commands directly

REM Try to find PHP in common locations
set PHP_PATH=

REM Check if PHP is in PATH
where php >nul 2>&1
if %ERRORLEVEL% == 0 (
    php wp-cli.phar %*
    exit /b
)

REM Check LocalWP PHP (common installation path)
if exist "C:\Users\%USERNAME%\AppData\Local\Programs\Local\resources\extraResources\php\php.exe" (
    set PHP_PATH=C:\Users\%USERNAME%\AppData\Local\Programs\Local\resources\extraResources\php\php.exe
    "%PHP_PATH%" wp-cli.phar %*
    exit /b
)

REM Check if LocalWP site has PHP
if exist "C:\Users\%USERNAME%\AppData\Roaming\Local\run\php\php.exe" (
    set PHP_PATH=C:\Users\%USERNAME%\AppData\Roaming\Local\run\php\php.exe
    "%PHP_PATH%" wp-cli.phar %*
    exit /b
)

echo PHP not found. Please ensure PHP is installed or use LocalWP's built-in terminal.
echo.
echo To use WP-CLI with LocalWP:
echo 1. Open LocalWP
echo 2. Right-click your site
echo 3. Select "Open Site Shell"
echo 4. WP-CLI is already available there!
pause
exit /b 1

