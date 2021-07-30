<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                       <div class="row">
                           <div class="col-md-6">
                                All Orders
                           </div>
                       </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                         @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                  <th scope="col">Order Id</th>
                                  <th scope="col">Subtotal</th>
                                  <th scope="col">Discount</th>
                                  <th scope="col">Tax</th>
                                  <th scope="col">Total</th>
                                  <th scope="col">First Name</th>
                                  <th scope="col">Last Name</th>
                                  <th scope="col">Email</th>
                                  <th scope="col">Zipcode</th>
                                  <th scope="col">Status</th>
                                  <th scope="col">Order Date</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>${{ $order->subtotal }}</td>
                                        <td>${{ $order->discount }}</td>
                                        <td>${{ $order->tax }}</td>
                                        <td>${{ $order->total }}</td>
                                        <td>{{ $order->firstname }}</td>
                                        <td>{{ $order->lastname }}</td>
                                        <td>{{ $order->email }}</td>
                                        <td>{{ $order->zipcode }}</td>
                                        <td>{{ $order->status }}</td>
                                        <td>{{ $order->created_at }}</td>
                                        <td>
                                            {{-- {{ route('admin.editcategory',['category_slug'=> $category->slug]) }} --}}
                                            <a class="btn btn-info btn-sm" href="{{ route('admin.orderdetails',['order_id'=> $order->id]) }}">Details</a>
                                        </td>
                                    </tr>
                                @endforeach
                              </tbody>
                        </table>
                        {{$orders->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
