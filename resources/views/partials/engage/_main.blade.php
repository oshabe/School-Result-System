<!--begin::Engage drawers-->
@if(theme()->getOption('layout', 'engage/demos/enabled'))
    {{ theme()->getView('partials/engage/demos/_main') }}
@endif

@if(theme()->getOption('layout', 'engage/help/enabled'))
    {{ theme()->getView('partials/engage/help/_main') }}
@endif
<!--end::Engage drawers-->

<!--begin::Engage toolbar-->

<!--end::Engage toolbar-->
