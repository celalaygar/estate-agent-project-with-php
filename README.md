# estate agent project with php
Php codeigniter ile yapılmış bir emlak projesidir. Wamp üzerinde yapılmış bir projedir.
- ilk etapda `emlak` adında bir dosya açın ve bu projeyi tamamen içine atınız. 
- Dosya adını farklı girmek istiyorsanız eğer `estate-agent-project-with-php/application/config/config.php` dizinde bulunan `config.php` adındaki dosyaya girip `26. satırda` bulunan `$config['base_url'] = 'http://localhost/emlak/';` bu kod üzerinde `../emlak` ismini değiştirmeniz gereklidir. İsmini ne koyarsanız dosyayı ona göre oluşturmalısınız. 
- Örnek olarak `$config['base_url'] = 'http://localhost/ProjeEmlak/';` derseniz dosya isminide ProjeEmlak koymak zorundasınız.

- Daha sonra `evkirala` adında bir veritabanı oluşturunuz. 
- Ardından ana dizinde bulunan `evkirala.sql` dosyasını açtğınız veritabanına import etmeniz gerekmektedir. 
- Veritabanı ile ilgili bilgileri `estate-agent-project-with-php/application/config/database.php` dizinde bulunan `database.php` dosyası üzerinden bilgileri değiştirebilirsiniz
