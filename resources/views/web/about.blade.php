@extends('web.layouts.app')

@section('title', 'About Us - New Heroes International')

@section('content')
<style>
    .value-card {
        transition: all 0.3s ease;
    }
    .value-card:hover {
        transform: translateY(-8px);
    }
    .value-card-icon {
        transition: all 0.3s ease;
    }
    .value-card:hover .value-card-icon {
        transform: scale(1.1) rotate(5deg);
    }
    .stats-number {
        font-size: 3rem;
        font-weight: 700;
        line-height: 1;
    }
</style>

<!-- Hero Section -->
<div class="relative bg-white py-20 md:py-32 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-gray-50 to-white"></div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-block px-4 py-1.5 bg-blue-50 text-blue-600 text-sm font-semibold rounded-full mb-6">
                WHO WE ARE
            </div>
            <h1 class="text-5xl md:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                NEW HEROES INTERNATIONAL LIMITED
            </h1>
            <p class="text-2xl text-gray-600 leading-relaxed mb-8">
                Your Trusted Partner in Cargo Clearing and Logistics
            </p>
            <p class="text-lg text-gray-600 leading-relaxed max-w-3xl mx-auto">
                A professional clearing and forwarding company based in Dar es Salaam, Tanzania, specializing in efficient handling and clearance of cargo through major ports.
            </p>
        </div>
    </div>
</div>

<!-- Company Overview -->
<div class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-5xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    About Our Company
                </h2>
            </div>
            
            <div class="prose prose-lg max-w-none text-gray-600 text-lg leading-relaxed space-y-6">
                <p>
                    NEW HEROES INTERNATIONAL LIMITED is a professional clearing and forwarding company based in Dar es Salaam, Tanzania, specializing in the efficient handling and clearance of cargo through major ports. The company focuses primarily on the clearance of motor vehicles, heavy machinery, and industrial equipment, providing reliable logistics support to individuals, businesses, and organizations.
                </p>
                <p>
                    With extensive knowledge of port procedures, customs regulations, and cargo logistics, we ensure that shipments are processed efficiently and delivered safely to their final destination. Our goal is to simplify the import process for our clients by handling all required documentation, coordination, and cargo clearance procedures with professionalism and transparency.
                </p>
                <p>
                    At NEW HEROES INTERNATIONAL LIMITED, we understand the importance of time, accuracy, and compliance in cargo clearing operations. Our experienced team works closely with customs authorities, port officials, and logistics partners to ensure smooth and efficient cargo processing.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Mission & Vision -->
<div class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Mission -->
                <div class="bg-white rounded-3xl p-10 shadow-sm hover:shadow-xl transition">
                    <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-bullseye text-blue-600 text-3xl"></i>
                    </div>
                    <h3 class="text-3xl font-bold text-gray-900 mb-4">Our Mission</h3>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        Our mission is to provide efficient, reliable, and transparent clearing and forwarding services that simplify cargo movement through ports while ensuring full compliance with customs regulations and industry standards.
                    </p>
                    <p class="text-gray-600 text-lg leading-relaxed mt-4">
                        We aim to deliver services that help our clients move their cargo quickly and efficiently while minimizing delays and operational challenges.
                    </p>
                </div>
                
                <!-- Vision -->
                <div class="bg-gradient-to-br from-blue-600 to-blue-700 rounded-3xl p-10 text-white shadow-xl">
                    <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-eye text-white text-3xl"></i>
                    </div>
                    <h3 class="text-3xl font-bold mb-4">Our Vision</h3>
                    <p class="text-blue-100 text-lg leading-relaxed">
                        Our vision is to become a trusted and leading clearing and forwarding company in Tanzania, recognized for professionalism, reliability, and excellence in cargo logistics and customs clearance services.
                    </p>
                    <p class="text-blue-100 text-lg leading-relaxed mt-4">
                        We strive to build long-term relationships with our clients by consistently delivering high-quality service and dependable logistics solutions.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Core Values -->
<div class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <div class="inline-block px-4 py-1.5 bg-blue-50 text-blue-600 text-sm font-semibold rounded-full mb-4">
                    OUR PRINCIPLES
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Our Core Values
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    The principles that guide everything we do
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Integrity -->
                <div class="value-card bg-white rounded-2xl p-8 shadow-sm hover:shadow-2xl border border-gray-100">
                    <div class="value-card-icon w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-balance-scale text-green-600 text-3xl"></i>
                    </div>
                    <h4 class="text-2xl font-bold text-gray-900 mb-3">Integrity</h4>
                    <p class="text-gray-600 leading-relaxed">
                        We conduct our business with honesty, transparency, and accountability in every service we provide.
                    </p>
                </div>
                
                <!-- Professionalism -->
                <div class="value-card bg-white rounded-2xl p-8 shadow-sm hover:shadow-2xl border border-gray-100">
                    <div class="value-card-icon w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-user-tie text-blue-600 text-3xl"></i>
                    </div>
                    <h4 class="text-2xl font-bold text-gray-900 mb-3">Professionalism</h4>
                    <p class="text-gray-600 leading-relaxed">
                        We maintain high standards of professionalism and expertise in handling cargo clearance and logistics operations.
                    </p>
                </div>
                
                <!-- Efficiency -->
                <div class="value-card bg-white rounded-2xl p-8 shadow-sm hover:shadow-2xl border border-gray-100">
                    <div class="value-card-icon w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-bolt text-purple-600 text-3xl"></i>
                    </div>
                    <h4 class="text-2xl font-bold text-gray-900 mb-3">Efficiency</h4>
                    <p class="text-gray-600 leading-relaxed">
                        We focus on delivering fast and reliable services by ensuring accurate documentation and streamlined cargo clearance procedures.
                    </p>
                </div>
                
                <!-- Customer Commitment -->
                <div class="value-card bg-white rounded-2xl p-8 shadow-sm hover:shadow-2xl border border-gray-100">
                    <div class="value-card-icon w-16 h-16 bg-orange-100 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-handshake text-orange-600 text-3xl"></i>
                    </div>
                    <h4 class="text-2xl font-bold text-gray-900 mb-3">Customer Commitment</h4>
                    <p class="text-gray-600 leading-relaxed">
                        Our clients are at the center of our operations, and we strive to provide solutions that meet their logistics needs.
                    </p>
                </div>
                
                <!-- Reliability -->
                <div class="value-card bg-white rounded-2xl p-8 shadow-sm hover:shadow-2xl border border-gray-100">
                    <div class="value-card-icon w-16 h-16 bg-red-100 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-shield-alt text-red-600 text-3xl"></i>
                    </div>
                    <h4 class="text-2xl font-bold text-gray-900 mb-3">Reliability</h4>
                    <p class="text-gray-600 leading-relaxed">
                        We aim to be a dependable logistics partner by delivering consistent and reliable services.
                    </p>
                </div>
                
                <!-- Excellence (6th value for balance) -->
                <div class="value-card bg-white rounded-2xl p-8 shadow-sm hover:shadow-2xl border border-gray-100">
                    <div class="value-card-icon w-16 h-16 bg-yellow-100 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-star text-yellow-600 text-3xl"></i>
                    </div>
                    <h4 class="text-2xl font-bold text-gray-900 mb-3">Excellence</h4>
                    <p class="text-gray-600 leading-relaxed">
                        We continuously strive for excellence in every aspect of our service delivery and client relationships.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- What We Do -->
<div class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <div class="inline-block px-4 py-1.5 bg-blue-50 text-blue-600 text-sm font-semibold rounded-full mb-4">
                    OUR EXPERTISE
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    What We Do
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    NEW HEROES INTERNATIONAL LIMITED provides a range of clearing and logistics services designed to simplify cargo importation processes.
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white rounded-xl p-6 hover:shadow-lg transition border border-gray-100">
                    <div class="flex items-start">
                        <i class="fas fa-car text-blue-600 text-2xl mr-4 mt-1"></i>
                        <div>
                            <h5 class="font-bold text-gray-900 mb-2">Motor Vehicle Clearing</h5>
                            <p class="text-sm text-gray-600">Professional clearance services for all types of vehicles</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl p-6 hover:shadow-lg transition border border-gray-100">
                    <div class="flex items-start">
                        <i class="fas fa-truck-monster text-blue-600 text-2xl mr-4 mt-1"></i>
                        <div>
                            <h5 class="font-bold text-gray-900 mb-2">Heavy Machinery Clearing</h5>
                            <p class="text-sm text-gray-600">Specialized handling of industrial equipment and machinery</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl p-6 hover:shadow-lg transition border border-gray-100">
                    <div class="flex items-start">
                        <i class="fas fa-file-contract text-blue-600 text-2xl mr-4 mt-1"></i>
                        <div>
                            <h5 class="font-bold text-gray-900 mb-2">Customs Documentation</h5>
                            <p class="text-sm text-gray-600">Complete documentation and compliance support</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl p-6 hover:shadow-lg transition border border-gray-100">
                    <div class="flex items-start">
                        <i class="fas fa-ship text-blue-600 text-2xl mr-4 mt-1"></i>
                        <div>
                            <h5 class="font-bold text-gray-900 mb-2">Port Cargo Handling</h5>
                            <p class="text-sm text-gray-600">Efficient coordination and cargo management at ports</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl p-6 hover:shadow-lg transition border border-gray-100">
                    <div class="flex items-start">
                        <i class="fas fa-shipping-fast text-blue-600 text-2xl mr-4 mt-1"></i>
                        <div>
                            <h5 class="font-bold text-gray-900 mb-2">Logistics Coordination</h5>
                            <p class="text-sm text-gray-600">End-to-end cargo delivery coordination services</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl p-6 hover:shadow-lg transition border border-gray-100">
                    <div class="flex items-start">
                        <i class="fas fa-comments text-blue-600 text-2xl mr-4 mt-1"></i>
                        <div>
                            <h5 class="font-bold text-gray-900 mb-2">Import Consultation</h5>
                            <p class="text-sm text-gray-600">Expert guidance on import processes and regulations</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Why Choose Us -->
<div class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Why Choose NEW HEROES INTERNATIONAL
                </h2>
            </div>
            
            <div class="grid md:grid-cols-2 gap-8">
                <div class="flex items-start">
                    <div class="flex-shrink-0 w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mr-4">
                        <i class="fas fa-users text-blue-600 text-xl"></i>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-gray-900 mb-2">Experienced Team</h4>
                        <p class="text-gray-600">Our team has strong knowledge of customs procedures, port operations, and cargo clearance processes.</p>
                    </div>
                </div>
                
                <div class="flex items-start">
                    <div class="flex-shrink-0 w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mr-4">
                        <i class="fas fa-tachometer-alt text-green-600 text-xl"></i>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-gray-900 mb-2">Efficient Cargo Processing</h4>
                        <p class="text-gray-600">We ensure proper documentation and efficient coordination with port authorities to minimize delays.</p>
                    </div>
                </div>
                
                <div class="flex items-start">
                    <div class="flex-shrink-0 w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center mr-4">
                        <i class="fas fa-medal text-purple-600 text-xl"></i>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-gray-900 mb-2">Professional Service</h4>
                        <p class="text-gray-600">We maintain high standards of professionalism and transparency in every transaction.</p>
                    </div>
                </div>
                
                <div class="flex items-start">
                    <div class="flex-shrink-0 w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center mr-4">
                        <i class="fas fa-truck text-orange-600 text-xl"></i>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-gray-900 mb-2">Reliable Logistics Support</h4>
                        <p class="text-gray-600">Our clients rely on us to manage cargo clearance and logistics coordination efficiently.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Industries We Serve -->
<div class="py-20 bg-gradient-to-br from-blue-50 to-white">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Industries We Serve
                </h2>
                <p class="text-xl text-gray-600">
                    Our services support a wide range of industries
                </p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
                <div class="bg-white rounded-xl p-6 text-center hover:shadow-lg transition">
                    <i class="fas fa-car-side text-blue-600 text-3xl mb-3"></i>
                    <p class="text-sm font-semibold text-gray-900">Vehicle Importers</p>
                </div>
                
                <div class="bg-white rounded-xl p-6 text-center hover:shadow-lg transition">
                    <i class="fas fa-hard-hat text-orange-600 text-3xl mb-3"></i>
                    <p class="text-sm font-semibold text-gray-900">Construction</p>
                </div>
                
                <div class="bg-white rounded-xl p-6 text-center hover:shadow-lg transition">
                    <i class="fas fa-cogs text-purple-600 text-3xl mb-3"></i>
                    <p class="text-sm font-semibold text-gray-900">Machinery Suppliers</p>
                </div>
                
                <div class="bg-white rounded-xl p-6 text-center hover:shadow-lg transition">
                    <i class="fas fa-truck-loading text-green-600 text-3xl mb-3"></i>
                    <p class="text-sm font-semibold text-gray-900">Transport & Logistics</p>
                </div>
                
                <div class="bg-white rounded-xl p-6 text-center hover:shadow-lg transition">
                    <i class="fas fa-tools text-red-600 text-3xl mb-3"></i>
                    <p class="text-sm font-semibold text-gray-900">Contractors</p>
                </div>
                
                <div class="bg-white rounded-xl p-6 text-center hover:shadow-lg transition">
                    <i class="fas fa-user text-yellow-600 text-3xl mb-3"></i>
                    <p class="text-sm font-semibold text-gray-900">Individual Importers</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Our Commitment -->
<div class="py-20 bg-gray-900 text-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">
                Our Commitment
            </h2>
            <p class="text-xl text-gray-300 leading-relaxed mb-8">
                At NEW HEROES INTERNATIONAL LIMITED, we are committed to delivering reliable clearing and forwarding services while maintaining high standards of professionalism and transparency.
            </p>
            <p class="text-lg text-gray-400 leading-relaxed mb-10">
                Our goal is to build long-term partnerships with our clients by providing dependable cargo clearance solutions that support their business operations.
            </p>
            <div class="flex flex-wrap gap-4 justify-center">
                <a href="{{ route('services') }}" class="inline-block px-8 py-4 bg-blue-600 text-white rounded-full font-semibold hover:bg-blue-700 transition-all hover:scale-105">
                    Our Services
                </a>
                <a href="{{ route('quote') }}" class="inline-block px-8 py-4 bg-transparent border-2 border-white text-white rounded-full font-semibold hover:bg-white hover:text-gray-900 transition-all">
                    Request a Quote
                </a>
                <a href="{{ route('contact') }}" class="inline-block px-8 py-4 bg-transparent border-2 border-white text-white rounded-full font-semibold hover:bg-white hover:text-gray-900 transition-all">
                    Contact Us
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
