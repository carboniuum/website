<x-layouts.main>

    <x-home.heading
        :title="$title->value"
        :subtitle="$subtitle->value"
        :headerImg="$headerImg->icon"
    />

    <x-home.brand
        :brands="$brands"
    />

    <x-home.partner
        :partners="$partners"
    />

    <x-home.feature
        :advantageImg="$advantageImg->icon"
    />

    <x-common.contact
    />

</x-layouts.main>
