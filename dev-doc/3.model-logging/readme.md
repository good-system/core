# 4. Model Logging

Add package [`good-system/laravel-model-history`](https://github.com/good-system/laravel-model-history) to do model activity logging.   

At this point, only thing logged is user creation.  This can be done by simply observe a generic `ModelObserer` provided `good-system/laravel-model-history`.  No need for a dedicated observer.