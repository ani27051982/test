<?php

namespace App\Exceptions;

//use Exception;
//use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

use Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;


class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        
        if($this->isHttpException($exception))
        {
			if ($exception instanceof NotFoundHttpException) 
			{
				
                                // ajax 404 json feedback
				if ($request->ajax()) 
				{
					return response()->json(['error' => 'Not Found'], 404);
				}
                                //dd($exception);
				// normal 404 view page feedback
				return response()->view('errors.404', [], 404);
			}
			
			elseif ($exception instanceof MethodNotAllowedHttpException) 
        	{
				if ($request->ajax()) 
				{
					return response()->json([
                                        'success' => 0,
                                        'message' => 'Method is not allowed for the requested route',
                                    ], 405);
				}
	
				// normal 404 view page feedback
				return response()->view('errors.405', [], 405);
			}
                        
                        
                        
		}
                
                else if ($exception instanceof AuthorizationException) 
                        {
                           return $this->unauthorization($request,$exception);   
                        }
		
                else {
                  return parent::render($request, $exception);  
                }
    }
    
    protected function unauthenticated($request, AuthenticationException $exception)
    {
       
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }

        return redirect()->route('/');
    }
	
    protected function unauthorization($request, AuthorizationException $exception)
    {
        echo "hii";
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Access Forbidden'], 503);
        }

        return response()->view('errors.503', [], 503);
    }
}
