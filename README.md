# traits-symfony
classes Traits for symfony

```bashh
    composer require traits-symfony
```


List of trait
###Trait for Entity
* NameEntity
* CommentEntity
* DescriptionEntity
* AddressEntityTrait
* CityEntityTrait
* ZipEntity

###Symfony Service Trait
* EntityManagerTrait
* LoggerTrait
* SerializerTrait
* SessionTrait
* TranslatorTrait

###Symfony Security Trait
* NeedLogin (test function simulate login)


example use on classes
```php
# symonny entity
class Person {
    use \Fardus\Traits\Symfony\Entity\NameEntity;
    use \Fardus\Traits\Symfony\Entity\FirstnameEntity;
    use \Fardus\Traits\Symfony\Entity\AddressEntityTrait;
    use \Fardus\Traits\Symfony\Entity\CityEntityTrait;
    use \Fardus\Traits\Symfony\Entity\ZipEntity;
    use \Fardus\Traits\Symfony\Entity\EnableEntity;
}

# symfony services
use Fardus\Traits\Symfony\Manager\LoggerTrait;

class AbstractClient
{
    use LoggerTrait;

    #...
}
```
