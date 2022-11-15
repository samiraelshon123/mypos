<?php
return [
    'phone' => 'The :attribute field contains an invalid number ',
    'accepted'  => ':attribute يجب ان يكون مقبولا ',
    'active_url'  => ':attribute ليس عنوان URL صالح ',
    'after'  => ':attribute يجب أن يكون تاريخ بعد :date',
    'alpha'  => ':attribute قد تحتوي فقط على الحروف',
    'alpha_dash'  => ':attribute قد تحتوي على أحرف وأرقام وشرطات ',
    'alpha_num'  => ':attribute قد تحتوي على أحرف وأرقام ',
    'array'  => ':attribute يجب ان يكون مصفوفة',
    'before'  => ':attribute يجب أن يكون تاريخ قبل :date',
    'boolean'  => ':attribute يجب ان يكون true او false',
    'confirmed'  => ':attribute لايتطابق مع التأكيد',
    'date'  => ':attribute ليس تاريخ صالح',
    'date_format'  => ':attribute لايتطابق مع شكل :format',
    'different'  => ':attribute و :other يجب ان يكون مختلف',
    'digits'  => ':attribute يجب ان يكون :digits رقم',
    'digits_between'  => ':attribute يجب ان يكون بين :min و :max رقم',
    'email'  => ':attribute يجب أن يكون عنوان بريد إلكتروني صالح',
    'exists'  => ' :attribute غير صالح',
    'filled'  => 'حقل :attribute مطلوب',
    'image'  => 'حقل :attribute يجب ان يكون صورة ',
    'in'  => 'الحقل المحدد :attribute غير صالح ',
    'integer'  => ':attribute يجب أن يكون عدد صحيح',
    'ip'  => ':attribute يجب ان يكون عنوان IP صالح',
    'json'  => ':attribute يجب ان يكون JSON  ',
    'mimes'  => 'حقل :attribute يجب ان يكون الملف من نوع: :values ',
    'not_in'  => 'حقل :attribute المحدد غير صالح ',
    'numeric'  => 'حقل :attribute يجب ان يكون رقم ',
    'regex'  => 'تنسيق :attribute   غير صالح',
    'required'  => 'حقل :attribute مطلوب',
    'required_if'  => 'حقل :attribute مطلوب عندما :other يكون :value ',
    'required_with'  => 'حقل :attribute  مطلوب عندما يكون:values موجود ',
    'required_with_all'  => 'حقل :attribute مطلوب عندما يكون:values موجود ',
    'required_without'  => 'حقل :attribute مطلوب عندما يكون :values غير موجود ',
    'required_without_all'  => 'حقل :attribute عندما لا يكون  :values موجود ',
    'same'  => 'حقل :attribute و :other يجب ان يكون متطابق ',
    'string'  => 'حقل :attribute يجب ان يكون نص ',
    'timezone'  => 'حقل :attribute يجب ان تكون المنطقة صالحة ',
    'unique'  => ':attribute مسجل من قبل ',
    'url'  => 'تنسيق حقل :attribute  غير صالح  ',
    'recaptcha'  => 'حقل :attribute غير صحيح',
    'recaptcha_response_field'  => 'حقل :attribute غير صحيح',
    'max'                  => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أصغر من :max ',
        'file'    => 'يجب أن لا يتجاوز حجم الملف :attribute :max كيلوبايت ',
        'string'  => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا ',
        'array'   => 'يجب أن لا يحتوي :attribute على أكثر من :max عناصر/عنصر ',
    ],
    'gte'                  => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أصغر من :value ',
        'file'    => 'يجب أن لا يتجاوز حجم الملف :attribute :value كيلوبايت ',
        'string'  => 'يجب أن لا يتجاوز طول النّص :attribute :value حروفٍ/حرفًا ',
        'array'   => 'يجب أن لا يحتوي :attribute على أكثر من :value عناصر/عنصر ',
    ],
    'min'                  => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أكبر من :min ',
        'file'    => 'يجب أن يكون حجم الملف :attribute على الأقل :min كيلوبايت ',
        'string'  => 'يجب أن يكون طول النص :attribute على الأقل :min رقم ',
        'array'   => 'يجب أن يحتوي :attribute على الأقل على :min عُنصرًا/عناصر ',
    ],
    'attributes' => [
        // frontend an
        'keyPersons' => 'المؤسسين',
        'website_link' => 'رابط الموقع',
        'logo'=>'الشعار',
        'keyPersons.*.name' => 'أسم المؤسس',
        'other_companies' => 'شركات أخري ',
        'other_companies.*' => 'أسماء الشركات الاخري ',
        'keyPersons.*.linkedInURL' => 'رابط لينكد ان المؤسس',
        'keyPersons.*.twitterURL' => 'رابط تويتر  المؤسس',

        'founders' => 'المنشئ',
        'founders.*.name' => 'أسم المنشئ',
        'founders.*.linkedInURL' => 'رابط لينكد ان المنشئ',
        'founders.*.twitterURL' => 'رابط تويتر المنشئ',

        'investmentRounds.*.roundType' => 'نوع الجولة الاستثمارية ',
        'investmentRounds.*.date' =>' تاريخ الجولة الاستثمارية ',
        'investmentRounds.*.amount' => 'قيمة الجولة الاستثمارية ',
        'investmentRounds.*.investment_Investors.*' => 'المستثمرين',
        'investmentRounds.*.investment_Investors.*' => 'المستثمرين',
        'investmentRounds.*.other_investment_Investors.*' => 'مستثمري الاستثمار الاخرين ',
        'industries' =>'القطاع',

        //end frontend



        'email' => 'البريد الالكتروني',
        'name' => 'الاسم',
        'country_id' => 'الدوله',
        'city_id' => 'المدينه',
        'time_id' => 'الوقت',
        'date_en' => 'التاريخ بالعربى',
        'date_ar' => 'التاريخ بالانجليزيه',
        'address_id' => 'العنوان',
        'express' => 'حاله طلبك',
        'house' => 'نواع المنزل',
        'order_id' => 'رقم الطلب',
        'rating_time' => 'احترام الوقت',
        'rating_clean_workspace' => 'نظاقه المكان العمل',
        'rating_skill_repairs' => 'المهاره فى التصليح',
        'rating_explain_problem' => 'شرح المشكله',
        'comment' => 'التعليق',
        'mobile' => 'رقم الجوال',
        'price' => 'السعر',
        'price_emergency' => 'السعر فى حاله الطوارئ',
        'identification' => 'رقم الهويه الوطنيه',
        'name ar' => 'الاسم بالعربيه',
        'name en' => 'الاسم بلانجليزيه',
        'address' => 'العنوان',
        'bio' => 'نبذه مختصره ',
        'about_me' => 'نبذه مختصره ',
        'payment_method' => 'وسيله الدفع ',
        'state_id' => 'المنطقه',
        'vehicle_picture' => 'صوره السياره',
        'segment_id' => 'التخصص',
        'model_id' => 'موديل السياره',
        'plate_number' => 'ارقام السياره',
        'color' => 'لون السياره',
        'vechical_id' => ' id',
        'lat' => 'خط الطول',
        'lng' => 'دائره لعرض',
        'booking_id' => 'رقم الحجز',
        'booking_datetime' => 'تاريخ الحجز',
        'booking_date' => 'تاريخ الحجز',
        'latitude' => 'خط الطول',
        'longitude' => 'دائره لعرض',



        //////
        ///
        'username'              => 'اسم المُستخدم',
        'first_name'            => 'الاسم الأول',
        'last_name'             => 'الاسم الاخير',
        'password'              => 'كلمة المرور',

        'password_confirmation' => 'تأكيد كلمة المرور',
        'new_confirm_password' => 'كلمة المرور التأكيديه',
        'new_password' => 'كلمة المرور الجديده',
        'city'                  => 'المدينة',
        'country'               => 'الدولة',
        'phone'                 => 'الهاتف',
        'age'                   => 'العمر',
        'sex'                   => 'الجنس',
        'gender'                => 'النوع',
        'day'                   => 'اليوم',
        'month'                 => 'الشهر',
        'year'                  => 'السنة',
        'hour'                  => 'ساعة',
        'minute'                => 'دقيقة',
        'second'                => 'ثانية',
        'title'                 => 'العنوان',
        'content'               => 'المُحتوى',
        'description'           => 'الوصف',
        'excerpt'               => 'المُلخص',
        'date'                  => 'التاريخ',
        'time'                  => 'الوقت',
        'available'             => 'مُتاح',
        'size'                  => 'الحجم',
        'report_reason_text' => 'سبب البلاغ',
        'full_mobile' => 'رقم الجوال',
        'country_code' => 'كود الدوله',
        'segments_id' => ' التخصص',
        'code' => 'كود ',
        'domain_id'=>'مجال',
        'category_id'=>'القسم',
        'user_coach_id'=>'الكوتش',
        'coach_time_slot_id'=>'الموعد',
        'coach_domain_service_id'=>'نطاق الخدمه',
        'coach_domain_id'=>'نطاق الكوتش',
        'services_one_price'=>'سعر 60 دقيقه ',
        'services_tow_price'=>'سعر 30 دقيقه ',
        'cover_photo'=>'صورة غلاف',
        'profile_picture'=>'صوره الشخصيه',
        'cv'=>'السيره الذاتيه',
        'image' => 'صوره',
        'permissions' => 'الصلاحيات',
        'ar' => [
            'name' => 'الاسم باللغه العربيه',
            'title' => 'العنوان باللغه العربيه',
            'description' => 'العنوان باللغه العربيه',

        ],
        'en' => [
            'name' => 'الاسم باللغه الانجليزيه',
            'title' => 'العنوان باللغه الانجليزيه',
            'description' => 'العنوان باللغه الانجليزيه',

        ],
        'category_id' => 'القسم',
        'purchase_price' => 'سعر الشراء ',
        'sale_price' => 'سعر البيع ',
        'stock' => 'المخزن ',


    ],
];
