# Bug héritage

## Propriété Private

Quand les propriétés sont private, 
PHP/PDO triche et créer "à la volée" des propriétés publique

```php
object(Brand)[8]
  private 'footer_order' => string '1' (length=1)
  private 'id' (CoreModel) => null
  private 'name' (CoreModel) => null
  private 'created_at' (CoreModel) => null
  private 'updated_at' (CoreModel) => null
  public 'id' => string '1' (length=1)
  public 'name' => string 'oCirage' (length=7)
  public 'created_at' => string '2018-10-17 09:00:00' (length=19)
  public 'updated_at' => null
```

## Propriété Protected

```php
  object(Brand)[8]
  private 'footer_order' => string '1' (length=1)
  protected 'id' => string '1' (length=1)
  protected 'name' => string 'oCirage' (length=7)
  protected 'created_at' => string '2018-10-17 09:00:00' (length=19)
  protected 'updated_at' => null
```
