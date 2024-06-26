# API in Laravel
___
## Что за API?

<em>Данный API был создан для технического задания в компанию.
Он является простым примером того что я умею работыть с фреймворком "Laravel".</em>

___
## Работа с API

- [Sales](#sales)
- [Orders](#orders)
- [Stocks](#stocks)
- [Incomes](#incomes)
- [Пример запроса](#Пример-запроса)
- [API](https://app-b0b5614b-5d2d-4d56-9370-e4791dc6de92.cleverapps.io/api/orders?key=9)
___
## [Sales](#sales)

<b><em>Принимает значения:</em></b> 

```dateFrom``` - Принимает значение "дата" или "дата + время". Возвращает список товаров начиная с той даты которую Вы вписали.
Формат "даты" и "даты + время" - Y-m-d или Y-m-d H:i:s. 

```dateTo``` - Принимает значение "дата" или "дата + время". Возвращает список товаров до определенной даты которую Вы вписали.
Формат "дата" и "дата + время" - Y-m-d или Y-m-d H:i:s. 

```key``` - Принимет секретный токен для получения данных.

```limit``` - Принимет числовое значение по дефолту стоит возвращяемое значение 500. Возвращает Н-ое количество записей.

```page``` - Принимет числовое значение. Возвращает страницу с данными.

<b><em>Возвращает:</em></b>

```price``` - Возвращает цену продукта.

```product``` - Возвращает название продукта.

```amount``` - Возвращает количество проданых продуктов.

```order``` - Возвращает количество заказаных продуктов.

```created_at``` - Возвращает дату создания продукта.

___
## [Orders](#orders)

<b><em>Принимает значения:</em></b> 

```dateFrom``` - Принимает значение "дата" или "дата + время". Возвращает список товаров начиная с той даты которую Вы вписали.
Формат "даты" и "даты + время" - Y-m-d или Y-m-d H:i:s. 

```dateTo``` - Принимает значение "дата" или "дата + время". Возвращает список товаров до определенной даты которую Вы вписали.
Формат "дата" и "дата + время" - Y-m-d или Y-m-d H:i:s. 

```key``` - Принимет секретный токен для получения данных.

```limit``` - Принимет числовое значение по дефолту стоит возвращяемое значение 500. Возвращает Н-ое количество записей.

```page``` - Принимет числовое значение. Возвращает страницу с данными.

<b><em>Возвращает:</em></b>

```price``` - Возвращает цену продукта.

```product``` - Возвращает название продукта.

```username``` - Возвращает имя пользователя.

```created_at``` - Возвращает дату создания продукта.

___
## [Stocks](#stocks)

<b><em>Принимает значения:</em></b> 

```dateFrom``` - Принимает значение "дата" или "дата + время". Возвращает список товаров начиная с той даты которую Вы вписали.
Формат "даты" и "даты + время" - Y-m-d или Y-m-d H:i:s. 

```key``` - Принимет секретный токен для получения данных.

```limit``` - Принимет числовое значение по дефолту стоит возвращяемое значение 500. Возвращает Н-ое количество записей.

```page``` - Принимет числовое значение. Возвращает страницу с данными.

<b><em>Возвращает:</em></b>

```id``` - Возвращает Id продукта.

```price``` - Возвращает цену продукта.

```product``` - Возвращает название продукта.

```amount``` - Возвращает количество доступного продукта на складе.

```created_at``` - Возвращает дату создания продукта.

```updated_at``` - Возвращает дату обновления продукта.

___
## [Incomes](#incomes)

<b><em>Принимает значения:</em></b> 

```dateFrom``` - Принимает значение "дата" или "дата + время". Возвращает список товаров начиная с той даты которую Вы вписали.
Формат "даты" и "даты + время" - Y-m-d или Y-m-d H:i:s. 

```dateTo``` - Принимает значение "дата" или "дата + время". Возвращает список товаров до определенной даты которую Вы вписали.
Формат "дата" и "дата + время" - Y-m-d или Y-m-d H:i:s. 

```key``` - Принимет секретный токен для получения данных.

```limit``` - Принимет числовое значение по дефолту стоит возвращяемое значение 500. Возвращает Н-ое количество записей.

```page``` - Принимет числовое значение. Возвращает страницу с данными.

<b><em>Возвращает:</em></b>

```price``` - Возвращает цену продукта.

```product``` - Возвращает название продукта.

```incomes``` - Возвращает доход продаж данного продукта.

```created_at``` - Возвращает дату создания продукта.

___
## [Пример запроса](#Пример-запроса)

```
/api/orders?dateFrom={Дата выгрузки ОТ}&dateTo={Дата выгрузки ДО}}&page={номер страницы}&limit={количество записей}key={ваш токен}
```
___


## Разработчик

<p align="center">
  <img src="https://avatars.githubusercontent.com/u/79089275?s=400&u=17a1fabcbae6fe4875bf049e57d03a6416b90a22&v=4" style="width: 200px; height: 200px;  border-radius: 50%;">
</p>

<p align="center">
  <a href="https://github.com/URLbug" style="color: #9ca3af">Rui Carter (Тимур Давыдов)</a>
</p>

___
