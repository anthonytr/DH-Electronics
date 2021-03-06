@extends('layouts.app')
@section('title', "Carrito")
@section('content')

<div class="container">
	<table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:50%">Product</th>
							<th style="width:10%">Price</th>
							<th style="width:8%">Quantity</th>
							<th style="width:22%" class="text-center">Subtotal</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
					<tbody>
						<tr>

							<td data-th="Product">
								<span item="name">{{ $product->name }}</span>
								<img src="{{ Storage::url($product->image) }}" class="rounded mx-auto d-block" width="60" height="60" alt="#">
							</td>
							<td data-th="Price">	<span item="price">{{ $product->price }}</span></td>
							<td data-th="Quantity">
								<form method = "post" action = "/cart/{{ $product->id }}" >
									 @csrf
									 <input type="number" class="form-control text-center" value="{{ $product }}" name = 'quantity'>
									 <button class="btn btn-info btn-sm"><i class="fas fa-check"></i></i></button>
								</form>
							</td>
							<td data-th="Subtotal" class="text-center"></td>
							<td class="actions" data-th>
								<form method = "post" action = "/cart/{{ $product->id }}" >
									 @csrf
									 @method('delete')
								<button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
								</form>
							</td>
						</tr>

					</tbody>
					<tfoot>
						<tr>
							<td><a href="{{ url()->previous() }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center"><strong>Total </strong></td>
							<td><a href="#" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
						</tr>
					</tfoot>
				</table>
</div>

@endsection
