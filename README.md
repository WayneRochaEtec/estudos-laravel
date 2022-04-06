<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Roteamento

## O que é roteamento

Em palavras simples *roteamento* é são os caminhos do seu site, como `https://meu-site/inicio` ou `https://meu-site/produtos`. No caso `inicio` e `produtos` são **rotas**

## Criando Rotas e Views

As rotas são definidas em `routes/web.php`, no 1º parâmetro é passado a rota, e no seguindo uma função que retorna uma **view**:

```php
Route::get('/produtos', function () {
    return view('produtos');
});
```

```php
Route::get('/inicio', function () {
    return view('paginaInicial');
});
```

As View são seus arquivos php com o HTML

> Exemplo:

![image](https://user-images.githubusercontent.com/62760711/162059110-d6fe86be-6271-45bf-92c5-f7240ce42868.png)

### Mais informações sobre Rotas na <a href="https://laravel.com/docs/9.x/routing">Documentação Oficial</a>
