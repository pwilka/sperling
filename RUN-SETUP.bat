@echo off
echo ========================================
echo Sperling Insurance - Site Setup Script
echo ========================================
echo.
echo This will help you run the setup script.
echo.
echo Step 1: Make sure you've uploaded setup-complete-site.php to your WordPress root
echo Step 2: Choose how to run it:
echo.
echo [1] Open in browser (recommended)
echo [2] Find LocalWP site path
echo [3] Exit
echo.
set /p choice="Enter choice (1-3): "

if "%choice%"=="1" (
    echo.
    echo Please enter your LocalWP site URL:
    echo Example: https://sperlinginsurance.local
    set /p siteurl="Site URL: "
    start "" "%siteurl%/setup-complete-site.php"
    echo.
    echo Opening in browser...
    echo After it runs, DELETE setup-complete-site.php for security!
    pause
    exit
)

if "%choice%"=="2" (
    echo.
    echo Searching for LocalWP sites...
    for /d %%i in ("%LOCALAPPDATA%\Roaming\Local\sites\*") do (
        echo Found: %%i
    )
    echo.
    echo Common LocalWP paths:
    echo %LOCALAPPDATA%\Roaming\Local\sites\[site-name]\app\public\
    echo.
    pause
    exit
)

if "%choice%"=="3" (
    exit
)

echo Invalid choice.
pause

