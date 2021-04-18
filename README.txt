# reids-observer

Реализация шаблона проектирования Observer на php с использованием pub/sub Redis

Для запуска на Ubuntu вам потребуется 
  redis-server
  php7.4
  
Ниже приведены все команды для установки:

    sudo apt install redis-server
    sudo systemctl start redis-server
    sudo systemctl enable redis-server
    sudo apt install php-redis



Скачайте репозиторий и распакуйте папку 
откройте файлы subject.php obverver1.php obverver2.php obverver3.php в разный окнах терминала командами:
      
      php  путьКфайлу/subject.php
      php  путьКфайлу/obverver1.php
      php  путьКфайлу/obverver2.php
      php  путьКфайлу/obverver3.php
      
И начните вводить сообщения в subject.
Observer принимает все сообщения от subject и выводит его на экран.
Что бы завершить программы введите сообщение exit.
