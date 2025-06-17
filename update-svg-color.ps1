$filePath = "c:\code\1.astrax-fintech-app-template\index.html"
$content = Get-Content -Path $filePath -Raw
$updatedContent = $content -replace 'fill="#B1E346"', 'fill="#4169E1"'
Set-Content -Path $filePath -Value $updatedContent
Write-Host "Updated all instances of green color (#B1E346) to royal blue (#4169E1)"
