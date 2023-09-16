<x-app-layout>
    {{--  Layout  --}}
    <div class="bg-tertiary-900">
        {{-- Fixed Left and Right Background --}}
        <div class="fixed hidden lg:block top-0 left-0 h-full w-1/2 bg-tertiary-900"></div>
        <div class="fixed hidden lg:block top-0 right-0 h-full w-1/2 bg-tertiary-800"></div>

        {{-- Grid:   1 Column Layout on Mobile;  2 Column Layout on Desktop--}}
        <div class="relative mx-auto max-w-7xl grid grid-cols-1 lg:grid-cols-2 gap-x-16 lg:px-8 lg:pt-16">
            {{-- Right - Order Summary --}}
            <section aria-labelledby="summary-heading"
                class="bg-tertiary-800 py-12 md:px-10 lg:col-start-2 lg:row-start-1 lg:mx-auto lg:w-full lg:max-w-lg lg:bg-transparent lg:px-0 lg:pb-24 lg:pt-0">
                <div class="cursor-default mx-auto max-w-2xl px-4 lg:max-w-none lg:px-0">
                    {{-- Summary--}}
                    <dl>
                        <dt class="text-lg font-medium text-primary-200"> Resumo</dt>
                    </dl>

                    <x-checkout.product-list>
                        <x-checkout.product-item
                                name="Blusa Preta"
                                image="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                                price="R$ 100,00"
                                :features="[
                                    'GG',
                                    '100% algodão',
                                    '14 dias de Garantia',
                                ]"/>
                    </x-checkout.product-list>
                </div>
            </section>
        </div>
    </div>
</x-app-layout>