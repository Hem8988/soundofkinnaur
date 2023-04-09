@extends('layout.app')
@section('content')
<div class="small-container cart-page">
    <table>
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="{{asset('assets/images/1.jpg')}}" alt="" />
                    <div>
                        <p>Red Printed T-shirt</p>
                        <small>Price: $50.00</small>
                        <br />
                        <a href="">Remove</a>
                    </div>
                </div>
            </td>
            <td><input type="nunber" value="1" /></td>
            <td>$50.00</td>
        </tr>

        <tr>
            <td>
                <div class="cart-info">
                    <img src="{{asset('assets/images/2.jpg')}}" alt="" />
                    <div>
                        <p>Red Printed T-shirt</p>
                        <small>Price: $50.00</small>
                        <br />
                        <a href="">Remove</a>
                    </div>
                </div>
            </td>
            <td><input type="nunber" value="1" /></td>
            <td>$50.00</td>
        </tr>

        <tr>
            <td>
                <div class="cart-info">
                    <img src="{{asset('assets/images/3.jpg')}}" alt="" />
                    <div>
                        <p>Red Printed T-shirt</p>
                        <small>Price: $50.00</small>
                        <br />
                        <a href="">Remove</a>
                    </div>
                </div>
            </td>
            <td><input type="nunber" value="1" /></td>
            <td>$50.00</td>
        </tr>
    </table>

    <div class="total-price">
        <table>
            <tr>
                <td>Subtotal</td>
                <td>$200.00</td>
            </tr>
            <tr>
                <td>GST 18%</td>
                <td>$36.00</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>$236.00</td>
            </tr>
        </table>
    </div>
</div>
@endsection