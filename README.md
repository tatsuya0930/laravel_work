# README

本リポジトリの動作確認には下記手順が必要となります。
  
・Gitのインストール  
https://git-scm.com/downloads  
  
・VirtualBoxのインストール  
https://www.virtualbox.org/wiki/Downloads  
  
・Vagrantのインストール  
https://www.vagrantup.com/downloads.html  
  
・Homesteadのダウンロード  
$ vagrant box add laravel/homestead  
  
・リポジトリのクローン(ホームディレクトリでの使用を前提としています)  
$ cd ~  
$ git clone https://github.com/tatsuya0930/laravel_work

・Vagrantの起動  
$ cd ~/laravel_work/Homestead  
$ vagrant up
  
・仮想環境へのログイン  
$ vagrant ssh  
  
・データベースのマイグレーション  
$ cd /home/vagrant/code  
$ php artisan migrate  
  
・ブラウザからアクセス  
http://192.168.10.10/home  
※http://homestead.test/home でアクセスする場合、下記hosts設定が必要  
192.168.10.10 homestead.test
