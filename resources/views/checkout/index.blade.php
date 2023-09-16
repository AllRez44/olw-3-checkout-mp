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

                    <dl class="space-y-6 pt-6 border-t border-white border-opacity-10 text-sm font-medium">
                        <x-checkout.summary-item title="Subtotal" value="300,00"/>
                        <x-checkout.summary-item title="Frete" value="25,00"/>
                        <x-checkout.summary-item title="Total" value="325,00" :is-last="true"/>
                    </dl>
                </div>
            </section>
            {{-- Left - Order Form --}}
            <section aria-labelledby="payment-and-shipping-heading"
                     class="py-16 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:w-full lg:max-w-lg lg:pb-24 lg:pt-0">
                <form>
                    <div class="mx-auto max-w-2xl px-4 lg:max-w-none lg:px-0">
                        <x-section-title title="Informações de Contato" />
                        <div class="mt-6">
                            <x-input-label for="email" value="E-mail"/>
                            <div class="mt-1">
                                <x-text-input
                                  type="email"
                                  name="email"
                                  id="email"
                                  autocomplete="email"
                                  placeholder="Digite seu e-mail"
                                />
                            </div>
                        </div>
                        <div class="mt-10">
                            <x-section-title title="Detalhes de Pagamento"/>
                            <div class="mt-6 grid grid-cols-3 gap-x-4 gap-y-6 sm:grid-cols-4">
                                <div class="col-span-3 sm:col-span-4">
                                    <x-input-label for="card-number" value="Número do Cartão"/>
                                    <div class="mt-1">
                                        <x-text-input
                                            type="text"
                                            name="card-number"
                                            id="card-number"
                                            placeholder="Número do Cartão"
                                        />
                                    </div>
                                </div>
                                <div class="col-span-2 sm:col-span-3">
                                    <x-input-label for="expiration-date" value="Data de Vencimento"/>
                                    <div class="mt-1">
                                        <x-text-input
                                            type="text"
                                            name="expiration-date"
                                            id="expiration-date"
                                            placeholder="MM / AA"
                                        />
                                    </div>
                                </div>
                                <div>
                                    <x-input-label for="cvc" value="CVC"/>
                                    <div class="mt-1">
                                        <x-text-input
                                            type="text"
                                            name="cvc"
                                            id="cvc"
                                            placeholder="CVC"
                                            />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</x-app-layout>