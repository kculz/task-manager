The task manager project API in Laravel is a backend system that allows users to manage and organize their projects and tasks within those projects.
# Requests

#### The default Domain for Laravel is http://127.0.0.1:8000

## Index Request

### GET: {{Domain}}/api/v1

### Json Response

#### Get all the tasks

```
{
    "data": [
        {
            "id": 1,
            "title": "Do Math",
            "is_done": false,
            "created_at": "2023-10-03T05:42:03.000000Z",
            "status": "open"
        },
        {
            "id": 2,
            "title": "help bento find accommodation",
            "is_done": false,
            "created_at": "2023-10-03T07:15:43.000000Z",
            "status": "open"
        }
    ]
}
```



## Show Request

#### Show single task by id 

### GET: {{Domain}}/api/v1/1

### Json Response

```
{
    "data": {
        "id": 1,
        "title": "Do Math",
        "is_done": false,
        "created_at": "2023-10-03T05:42:03.000000Z",
        "status": "open"
    }
}
```



## Store Request

#### Create a new task

### POST: {{Domain}}/api/v1

### Json Request

```
{
    "title": "New Task"
}
```

### Json Response

```
{
    "data": {
        "title": "New Task",
        "created_at": "2023-10-04T04:12:09.000000Z",
        "id": 3,
        "status": "open"
    }
}
```


## Update Request

#### Update task

### PUT: {{Domain}}/api/v1/2

### Json Request

```
{
    "title": "Updated Task",
    "is_done": true
}
```

### Json Response

```
{
    "data": {
        "id": 2,
        "title": "Updated task",
        "is_done": true,
        "created_at": "2023-10-03T07:15:43.000000Z",
        "status": "completed"
    }
}
```

## Update Request

#### Update task

### DELETE: {{Domain}}/api/v1/2

