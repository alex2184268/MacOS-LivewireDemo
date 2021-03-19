## 在ＭacOS上展示Livewire

#### 安裝環境

- 站台：Valet
- 資料庫：DBngin

DBngin直接到DBngin的官網下載即可。
再安裝valet前要先安裝Compoer並確認當前的路徑目錄有export到系統環境變數中。
```sh
export PATH="$PATH:$HOME/.composer/vendor/bin" 
當前的路徑目錄有export到系統環境變數
```
全域安裝Valet package
```sh
composer global require laravel/valet
```
安裝完畢執行Valet command
```sh
valet install
```
再來需要提供給valet站點才可以訪問專案程序，會要求輸入User密碼然後看到成功鏈結的訊息代表成功，應用程序的URL即為“http://<application_name>.test”
```sh
alexchen@MacBook-Pro alexchen % cd  MacOS-LivewireDemo 
alexchen@MacBook-Pro MacOS-LivewireDemo %
切換到專案目錄

valet link 
Password:
A [MacOS-LivewireDemo] symbolic link has been created in [/Users/alexchen/.config/valet/Sites/MacOS-LivewireDemo].
```

