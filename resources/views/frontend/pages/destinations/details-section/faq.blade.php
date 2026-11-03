  {{-- FAQ: Alpine accordion --}}
  <section id="faq" data-section class="scroll-mt-28 py-10 lg:py-14">
      <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <x-destination-section-heading eyebrow="Frequently Asked Questions" :title="'Questions About Studying in ' . $destination['name']" :description="'Answers to common questions about studying in ' . $destination['name'] . '.'" />
          <div class="mt-10 grid grid-cols-1 items-start gap-8 lg:grid-cols-12 lg:gap-10">
              <div class="lg:col-span-8 space-y-3">
                  @foreach ($destination['faqs'] as $index => $faq)
                      <article
                          class="overflow-hidden rounded-2xl border border-slate-200 bg-white transition hover:border-brand-300"
                          x-data="{ open: {{ $index === 0 ? 'true' : 'false' }} }" data-reveal>
                          <button type="button" @click="open = !open"
                              class="flex w-full items-center justify-between gap-5 px-5 py-5 text-left sm:px-6">
                              <span class="font-bold text-[#0B1D36]">{{ $faq['question'] }}</span>
                              <span
                                  class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-brand-50 text-brand-700">
                                  <iconify-icon :icon="open ? 'lucide:minus' : 'lucide:plus'"
                                      class="text-lg"></iconify-icon>
                              </span>
                          </button>
                          <div x-show="open" x-collapse x-cloak>
                              <div
                                  class="border-t border-slate-100 px-5 pb-5 pt-4 text-sm leading-7 text-slate-500 sm:px-6">
                                  {{ $faq['answer'] }}
                              </div>
                          </div>
                      </article>
                  @endforeach
              </div>
              <div class="lg:col-span-4 lg:self-stretch">

                  <div class="lg:sticky lg:top-32">

                      <div class="rounded-2xl border border-brand-100 bg-white p-6 shadow-sm sm:p-7">

                          <div
                              class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand-100 text-brand-500">

                              <iconify-icon icon="lucide:messages-square" class="text-xl">
                              </iconify-icon>

                          </div>

                          <h3 class="mt-5 text-xl text-neutral-500 font-medium text-brand-950">
                              Have more questions?
                          </h3>

                          <p class="mt-3 text-sm leading-6 text-slate-500">
                              Our specialists team can help you understand the admission process and next steps.
                          </p>


                          <a href="mailto:info@hbdservices.com"
                              class="group mt-6 flex items-center justify-between rounded-xl border border-brand-100 bg-brand-50 p-3.5 transition hover:border-brand-200 hover:bg-brand-100">

                              <span class="flex items-center gap-3">

                                  <span
                                      class="flex h-10 w-10 items-center justify-center rounded-lg bg-white text-secondary-600">

                                      <iconify-icon icon="lucide:mail" class="text-lg">
                                      </iconify-icon>

                                  </span>
                                  <span>
                                      <span class="block text-[10px] font-bold uppercase tracking-wider text-slate-400">
                                          Email Us
                                      </span>

                                      <span class="mt-0.5 block text-sm font-medium text-brand-900">
                                          Our Admission Team
                                      </span>
                                  </span>
                              </span>

                              <span
                                  class="flex h-8 w-8 items-center justify-center rounded-full bg-white text-brand-600 transition group-hover:translate-x-0.5">

                                  <iconify-icon icon="lucide:arrow-up-right" class="text-sm">
                                  </iconify-icon>
                              </span>
                          </a>
                      </div>

                      <div class="mt-4 rounded-2xl bg-brand-900 p-6 text-white">

                          <div class="flex items-start gap-3">

                              <div
                                  class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-secondary-500/15">

                                  <iconify-icon icon="lucide:headphones" class="text-lg text-secondary-400">
                                  </iconify-icon>

                              </div>
                              <div>

                                  <p class="text-sm font-medium">
                                      Need personal guidance?
                                  </p>

                                  <p class="mt-1 text-xs leading-5 text-brand-200">
                                      Speak with our team about your experience and eligibility.
                                  </p>
                                  <a href="tel:+8801978-855506"
                                      class="mt-5 inline-flex items-center gap-2 text-xs text-white font-medium uppercase tracking-wider text-secondary-400 transition hover:text-secondary-300">

                                      +880 1978-855506
                                      <iconify-icon icon="lucide:arrow-up-right" class="text-sm"></iconify-icon>
                                  </a>
                              </div>
                          </div>



                      </div>

                  </div>

              </div>
          </div>
      </div>
  </section>
