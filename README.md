# Feed reader
## Documentation

In app we should have several input feeds with different data formats and different datasources (e.g. file, stream). 

And we producing outptut in same predefined format from all feeds, that can be changed.

So, each input feed has own mapping to predefined format of output.

As additional option we should have ability to simple add new feed.

And, we can have multiple Dataproviders

In this case structure of package will be
```
- Dataprovider
|\
|  - DataSourceMapper 
|
- DataSource
|  -<Feedname1>
|  | \-- Input Datasource
|  |   \-- Mapper
|  |
|  -<Feedname2>
|    \-- Input Datasource
|     \-- Mapper
|
```
where DataSourceMapper contains mapping logic to output format and uses mappers from particular feed

In mappers we have 2 arrays:
1. Array with mappings, where key is output row name for particular output format, and value - row name from input.

2. Array with set of functions, where key is - target field name for output, and value is - function which will be used 
for transform input field to target field name for output. 


### Installation
````shell script
composer install
````

### How to use

````shell script
./console.php import
````

### Running Tests
````shell script
./vendor/bin/phpunit
````
