@extends('frontend.layouts.app')

@section('content')
    @include('frontend.pages.home.sections.hero')

    @include('frontend.pages.home.sections.journing')

    @include('frontend.pages.common-section.destination', ['destinations' => $destinations])

    @include('frontend.pages.common-section.service-section')

    @include('frontend.pages.home.sections.language-academy')

    @include('frontend.pages.home.sections.digital-platform')

    @include('frontend.pages.home.sections.achievers')

    @include('frontend.pages.home.sections.certification-awards')

    {{-- @include('frontend.pages.common-section.about-section') --}}

    @include('frontend.pages.home.sections.google-reviews')

    @include('frontend.pages.common-section.university-partners')

    @include('frontend.pages.common-section.cta-section')
@endsection
