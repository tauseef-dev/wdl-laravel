<?php
namespace App\Http\Controllers;
class RazorRedirect extends Controller{
public function razor()
{
    return redirect()->away('https://pages.razorpay.com/pl_G1ullAMMDWDunc/view');
}
}