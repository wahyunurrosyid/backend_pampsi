<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Traits\ResetPassword;

/**
 * @group Auth
 */
class ResetPasswordController extends Controller
{
    use ResetPassword;
}
