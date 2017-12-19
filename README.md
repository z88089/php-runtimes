# PHP-Runtimes
Simple script Calculate the PHP runtime.
计算PHP运行时间的小脚本

----------




有时（尤其在优化网站的时候）需要分析PHP脚本的运行时间，利用 `microtime()` 函数可以很方便的获取到，此类基于 `microtime()` 函数进行了一层封装。


Demo:
```python
$runtime = new PHPRuntimes();

$runtime->mark('mark1');
    some code...
$runtime->mark('mark2');
    some code...
    
$runtime->display();
```

and

```php >= 7.0```