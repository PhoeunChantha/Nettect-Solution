@extends('website.app')
@section('contents')
    <style>
        .container_term {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .term-section {
            /* border: 1px solid #dee2e6; */
            border-radius: 8px;
            padding: 22px 32px
                /* background-color: #f8f9fa; */
                /* margin-bottom: 20px; */
        }

        .term-title {
            font-size: 22px;
            font-weight: bold;
            color: #1077B8;
            margin-bottom: 14px;
        }

        .term-content {
            font-size: 18px;
            color: #333;
            line-height: 1.6;
            margin-bottom: 0;
        }

        .see-more {
            color: #1077B8;
            font-weight: bold;
            cursor: pointer;
            font-size: 14px;
        }

        .term-heading {
            text-align: center;
            margin-top: 20px;
            font-size: 27px;
            color: #1077B8;
            font-weight: bold;
        }
    </style>

    <div class="container_term d-flex justify-content-center">
        <div class="col-10">
            <div class="row d-flex justify-content-center ">
                <h2 class="term-heading mb-4">Terms & Conditions</h2>
                <div class="card border-0 shadow mb-5">
                    {{-- <div class="term-section ">
                        <h3 class="term-title">Term</h3>
                        <p class="term-content">
                            Ask CDCR San Quintin State Prison 2008. We installed Purex dispensers throughout the prison to
                            combat diseases…and it was a Roaring Success (as in Roaring Drunk) I mean we had Long lines of
                            prisoners fist fighting to use them.Ask CDCR San Quintin State Prison 2008. We installed Purex
                            dispensers throughout the prison to combat diseases…and it was a Roaring Success (as in Roaring
                            Drunk) I mean we had Long lines of prisoners fist fighting to use them.Ask CDCR San Quintin
                            State Prison 2008.
                            <span class="see-more" aria-label="See more about Privacy">See more</span>
                        </p>
                    </div> --}}

                      {!! $term_condition !!}
                </div>
            </div>
        </div>
    </div>
@endsection
