<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCheckoutRequest;
use App\Http\Requests\StoreCheckoutRequest;
use App\Http\Requests\UpdateCheckoutRequest;
use App\Models\Checkout;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckoutController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('checkout_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $checkouts = Checkout::all();

        return view('frontend.checkouts.index', compact('checkouts'));
    }

    public function create()
    {
        abort_if(Gate::denies('checkout_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.checkouts.create');
    }

    public function store(StoreCheckoutRequest $request)
    {
        $checkout = Checkout::create($request->all());

        return redirect()->route('frontend.checkouts.index');
    }

    public function edit(Checkout $checkout)
    {
        abort_if(Gate::denies('checkout_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.checkouts.edit', compact('checkout'));
    }

    public function update(UpdateCheckoutRequest $request, Checkout $checkout)
    {
        $checkout->update($request->all());

        return redirect()->route('frontend.checkouts.index');
    }

    public function show(Checkout $checkout)
    {
        abort_if(Gate::denies('checkout_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.checkouts.show', compact('checkout'));
    }

    public function destroy(Checkout $checkout)
    {
        abort_if(Gate::denies('checkout_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $checkout->delete();

        return back();
    }

    public function massDestroy(MassDestroyCheckoutRequest $request)
    {
        Checkout::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
