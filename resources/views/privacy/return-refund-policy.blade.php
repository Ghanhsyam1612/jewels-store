@extends('layouts.master')

@section('content')


  <!-- Shipping Policy Section -->
  <section class="container mx-auto py-12 px-6">
    <div class="max-w-4xl mx-auto space-y-3">
      <h2 class="text-3xl font-semibold text-primary font-montserrat">Return/Refund Policy</h2>

      <p class="text-base leading-relaxed text-primary font-montserrat">
        At Roaya Diamond, we strive to ensure that you are completely satisfied with your purchase. If for any reason you are not happy with your purchase, please read our refund and return policy below.
      </p>

      <div class="space-y-6">
        <div>
          <h3 class="text-lg font-medium text-primary font-montserrat">Returns Eligibility</h3>
          <p class="text-base text-primary font-montserrat">
            You may return your item within 30 days of receiving it. The product must be unused, in its original condition, and in the original packaging.
          </p>
        </div>

        <div>
            <h3 class="text-lg font-medium text-primary font-montserrat">Refund Process</h3>
            <p class="text-base text-primary font-montserrat">
                To initiate a refund, please contact us at [support@email.com] with your order number and reason for return. Once your return is processed, we will issue a refund to the original payment method.
            </p>
          </div>

        <div>
          <h3 class="text-lg font-medium text-primary font-montserrat">Non-Refundable Items</h3>
          <p class="text-base text-primary font-montserrat">
            Some items are not eligible for a refund, including:
          </p>
          <ul class="list-disc pl-6 text-base text-primary font-montserrat">
            <li>Gift cards</li>
            <li>Personalized or custom products</li>
            <li>Items on clearance or sale</li>
          </ul>
        </div>

        <div>
          <h3 class="text-lg font-medium text-primary font-montserrat">Shipping Costs</h3>
          <p class="text-base text-primary font-montserrat">
            Shipping fees are non-refundable. If your return is approved, you will be responsible for the cost of return shipping.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="container mx-auto py-5 px-6">
    <div class="max-w-4xl mx-auto">
      <h2 class="text-3xl font-semibold text-primary font-montserrat mb-4">Frequently Asked Questions</h2>
      
      <div class="space-y-4">

        <div class="border p-4">
            <button type="button" class="w-full flex justify-between items-center cursor-pointer" onclick="toggleFaq(this)">
                <h3 class="font-montserrat font-medium text-left text-primary">How do I initiate a return?</h3>
                <svg class="w-4 h-4 transform transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="6 9 12 15 18 9"></polyline>
                </svg>
            </button>
            <div class="faq-content hidden">
                <p class="text-primary/80 font-montserrat mt-2">
                    To initiate a return, please reach out to our customer support team via email at [support@email.com] with your order number and reason for the return. We will guide you through the process.
                </p>
            </div>
        </div>

        <div class="border p-4">
            <button type="button" class="w-full flex justify-between items-center cursor-pointer" onclick="toggleFaq(this)">
                <h3 class="font-montserrat font-medium text-left text-primary">How long does it take to process a refund?</h3>
                <svg class="w-4 h-4 transform transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="6 9 12 15 18 9"></polyline>
                </svg>
            </button>
            <div class="faq-content hidden">
                <p class="text-primary/80 font-montserrat mt-2">
                    Once we receive the returned item, it usually takes 5-7 business days to process the refund. The refund will be issued to the original payment method.
                </p>
            </div>
        </div>

        <div class="border p-4">
            <button type="button" class="w-full flex justify-between items-center cursor-pointer" onclick="toggleFaq(this)">
                <h3 class="font-montserrat font-medium text-left text-primary">What should I do if my return is not eligible?</h3>
                <svg class="w-4 h-4 transform transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="6 9 12 15 18 9"></polyline>
                </svg>
            </button>
            <div class="faq-content hidden">
                <p class="text-primary/80 font-montserrat mt-2">
                    If your return does not meet the eligibility criteria, our customer support team will contact you to discuss the next steps.
                </p>
            </div>
        </div>

        <div class="border p-4">
            <button type="button" class="w-full flex justify-between items-center cursor-pointer" onclick="toggleFaq(this)">
                <h3 class="font-montserrat font-medium text-left text-primary">Do I need to pay for return shipping?</h3>
                <svg class="w-4 h-4 transform transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="6 9 12 15 18 9"></polyline>
                </svg>
            </button>
            <div class="faq-content hidden">
                <p class="text-primary/80 font-montserrat mt-2">
                    Yes, you are responsible for return shipping unless the return is due to a defective product or a mistake on our part.
                </p>
            </div>
        </div>

        <div class="border p-4">
            <button type="button" class="w-full flex justify-between items-center cursor-pointer" onclick="toggleFaq(this)">
                <h3 class="font-montserrat font-medium text-left text-primary">Can I exchange an item instead of returning it?</h3>
                <svg class="w-4 h-4 transform transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="6 9 12 15 18 9"></polyline>
                </svg>
            </button>
            <div class="faq-content hidden">
                <p class="text-primary/80 font-montserrat mt-2">
                    Unfortunately, we do not offer direct exchanges. If you wish to exchange an item, please return the original item and place a new order for the desired item.
                </p>
            </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    function toggleFaq(button) {
        // Get the content div that follows the button
        const content = button.nextElementSibling;
        const svg = button.querySelector('svg');
        
        // Toggle the content visibility
        content.classList.toggle('hidden');
        
        // Rotate the arrow icon
        if (content.classList.contains('hidden')) {
            svg.style.transform = 'rotate(0deg)';
        } else {
            svg.style.transform = 'rotate(180deg)';
        }
    }
</script>


@endsection
