<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            
        </style>
    </head>
    <body>
        <div id="app">
            <div class="container">
                <h1>Number of Skills: @{{length}}</h1>
                <ul>
                    {{-- <li v-for="skill in skills">@{{ skill }}</li> --}}
                    <li v-for="skill in skills" v-text="skill"></li>
                </ul>
                <div class="row">
                <div class="col-md-2">    
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Skill</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" v-model="skill">
                </div>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-dark btn-sm" v-on:click="insert">Add Skill</button>
                </div>
                </div>
                <div>
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Registered On</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)  
                                <tr>
                                  <td>{{$user->name}}</td>
                                  <td>{{$user->email}}</td>
                                  <td>{{$user->role}}</td>
                                  <td>{{$user->created_at}}</td>
                                </tr>
                            @endforeach    
                        </tbody>
                      </table>
                </div>    
            </div>
        </div>

        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
        <script src="/js/app.js"></script>
    </body>
</html>
