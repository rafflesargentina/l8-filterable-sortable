<?php

namespace RafflesArgentina\FilterableSortable\Exceptions;

class FilterableSortableException extends \Exception
{
    /**
     * Report the exception.
     *
     * @return void
     */
    public function report()
    {
        //
    }

    /**
     * Render the exception into an HTTP response.
     *
     * @param \Illuminate\Http\Request $request The request object.
     *
     * @return \Illuminate\Http\Response
     */
    public function render($request)
    {
        return redirect()->back()->with(['rafflesargentina.status.error' => $this->message]);
    }
}
