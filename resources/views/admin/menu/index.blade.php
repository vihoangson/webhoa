@extends('layouts.admin.master')
@section('custom_header')
    <style>
        body.dragging, body.dragging * {
            cursor: move !important;
        }

        .dragged {
            position: absolute;
            opacity: 0.5;
            z-index: 2000;
        }

        ol.example li.placeholder {
            position: relative;
            /** More li styles **/
        }
        ol.example li.placeholder:before {
            position: absolute;
            /** Define arrowhead **/
        }

        .example li {
            list-style: none;
            margin: 3px;
            padding: 10px;
            border:1px solid #ccc;
        }

        .example {
            margin: 0px;
            padding: 0px;
        }
    </style>
@endsection

@section('content')
    <ol class='example'>
        <li>First
            <ol class=''>
                <li>First</li>
                <li>Second</li>
                <li>Third
                    <ol class=''>
                        <li>First</li>
                        <li>Second</li>
                        <li>Third</li>

                </li>
            </ol>
        </li>
        <li>Second</li>
        <li>Third</li>
    </ol>
@endsection



@section('custom_footer')
    <script src="/bower_components/jquery-sortable/source/js/jquery-sortable-min.js"></script>
    <script>
        $("ol.example").sortable({
//            group: 'nested',
//            delay: 500
        });
    </script>
@endsection
