@props(['title', 'links'])

<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    @foreach ($links as $label => $url)
                        @if ($loop->last)
                            <li class="breadcrumb-item active" aria-current="page">{{ $label }}</li>
                        @else
                            <li class="breadcrumb-item">
                                <a href="{{ $url }}">{{ $label }}</a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
            <div class="col-md-12">
                <div class="page-header-title">
                    <h2 class="mb-0">{{ $title }}</h2>
                </div>
            </div>
        </div>
    </div>
</div>
