# kata-train-reservation
[![Build Status](https://api.travis-ci.org/vdebes/kata-train-reservation.svg?branch=master)](https://travis-ci.org/vdebes/kata-train-reservation)
[![Test Coverage](https://api.codeclimate.com/v1/badges/d3212371239a59fae1e4/test_coverage)](https://codeclimate.com/github/vdebes/kata-train-reservation/test_coverage)
[![Maintainability](https://api.codeclimate.com/v1/badges/d3212371239a59fae1e4/maintainability)](https://codeclimate.com/github/vdebes/kata-train-reservation/maintainability)

Hexagonal architecture kata in PHP

## Definition of the problem
* [Original kata](https://github.com/emilybache/KataTrainReservation) from Emily Bache.

## External services
Our API will call external services. They are all in [_services/](/_services) directory and written in Python 
(got them from the original kata).

You will need Python3 and to start them using 
```
make services-start
``` 

Once the services have started, here are some usefull routes :
* [localhost:8082/booking_reference](http://localhost:8082/booking_reference) to obtain a new booking reference
* [localhost:8081/data_for_train/express_2000](http://localhost:8081/data_for_train/express_2000) to get the seats 
configuration of the train.

[Detailed informations](https://github.com/emilybache/KataTrainReservation#booking-reference-service) are available in 
the original kata.

## Tooling
The goal of the kata being to illustrate architecture concepts but also show a workflow, testing and quality assessment 
tools have been added. Most of them come from [vdebes/php-boilerplate](https://github.com/vdebes/php-boilerplate). 

```
make help
```

## Resources
* [Hexagonal architecture](https://alistair.cockburn.us/hexagonal-architecture/) original article from A.Cockburn
* [Adapter pattern](https://refactoring.guru/design-patterns/adapter) on Refactoring Guru
* [Dependency inversion principle](https://en.wikipedia.org/wiki/Dependency_inversion_principle) on Wikipedia
