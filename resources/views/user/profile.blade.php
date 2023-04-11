<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$user->name}}'s Profile</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{asset('js/app.js')}}" defer></script>
</head>
<body>
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">{{$user->name}}</span><span class="text-black-50">{{$user->email}}</span><span> </span></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="first name" value={{$user->name}} readonly></div>
                        <div class="col-md-6"><label class="labels">Email</label><input type="text" class="form-control" value={{$user->email}} placeholder="email with @" readonly></div>
                    </div>
                    <div class="mt-5 text-center">
                        <form action="{{route('user.profile.edit',$user->id)}}">
                        <button class="btn btn-primary profile-button" type="submit" >Edit Profile</button>
                    </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience"><span>Show Order History</span></div><br>
                    @if($orders->count()>0)
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Order ID</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Total Amount</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($orders))
                                @foreach ($orders as $order)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th> 
                                    <td><a href="">{{$order->id}}</a></td>
                                    <td>{{$order->created_at}}</td>
                                    <td>${{$order->total_amount}}</td>
                                    <td>{{$order->order_status}}</td>
                                </tr>
                                @endforeach
                                @endif
                                
                            </tbody>
                        </table>
                        <div class="text-center mt-4"><a href="{{ route('user.order_history', $user->id) }}">Display All History</a></div>
                    </div>
                    
                    @else
                    <div class="text-center mt-4">
                        <h2>No History Yet</h2>
                        <button><a href="{{route('home')}}" target="_blank" rel="noopener noreferrer">Order NOW</a></button>
                    </div>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</body>
</html>