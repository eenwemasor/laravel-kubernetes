<?php

return [
    'stickers' => [
        'name' => "Stickers",
        'icon' => "",
        'description' => 'Elevate your brand or personal expression with our premium sticker printing service. Our custom stickers are crafted with precision and attention to detail, ensuring vibrant colors, sharp graphics, and a professional finish.',
        'items' => [
            'die-cut-stickers' => [
                'name' => "Die cut stickers",
                'active' => 1, 
                'description' => "Die-cut stickers, uniquely shaped and designed, serve a variety of purposes—from product labeling to promotional giveaways. Their distinctive shapes and durable materials ensure they stand out and withstand elements like water, sunlight, and scratches.",
                'unit-price' => 100,
                'default-size' => [
                    [
                        'title' => '2″ × 2″',
                        'width' => 2,
                        'height' => 2
                    ],
                    [
                        'title' => '3″ × 3″',
                        'width' => 3,
                        'height' => 3
                    ],
                    [
                        'title' => '4″ × 4″',
                        'width' => 4,
                        'height' => 4
                    ],
                    [
                        'title' => '5″ × 5″',
                        'width' => 5,
                        'height' => 5
                    ]
                ],
                'default-quantity' => [50, 100, 200, 300, 500, 1000, 2000, 3000, 5000, 10000]
            ],
            'circle-stickers' => [
                'name' => 'Circle sticker',
                'active' => 1, 
                'description' => "Circular stickers, uniquely shaped and tailored for custom designs, are versatile for product labeling, marketing, decor, or giveaways. Crafted from durable materials, they endure water, sunlight, and scratches, ensuring long-lasting quality.",
                'unit-price' => 100,
                'default-size' => [
                    [
                        'title' => '1″ × 1″',
                        'width' => 1,
                        'height' => 1
                    ],
                    [
                        'title' => '2″ × 2″',
                        'width' => 2,
                        'height' => 2
                    ],
                    [
                        'title' => '3″ × 3″',
                        'width' => 3,
                        'height' => 3
                    ],
                    [
                        'title' => '4″ × 4″',
                        'width' => 4,
                        'height' => 4
                    ],
                    [
                        'title' => '5″ × 5″',
                        'width' => 5,
                        'height' => 5
                    ]
                ],
                'default-quantity' => [50, 100, 200, 300, 500, 1000, 2000, 3000, 5000, 10000]
            ],
            'rectangle-stickers'  => [
                'name' => 'Rectangle stickers',
                'active' => 1, 
                'description' => "Rectangle stickers, featuring a classic shape, are versatile for product labels, marketing, decor, or giveaways. Crafted from durable materials, they endure water, sunlight, and scratches, ensuring lasting quality and a polished appearance.",
                'unit-price' => 100,
                'default-size' => [
                    [
                        'title' => '2″ × 1″',
                        'width' => 2,
                        'height' => 1
                    ],
                    [
                        'title' => '3″ × 2″',
                        'width' => 3,
                        'height' => 2
                    ],
                    [
                        'title' => '4″ × 2″',
                        'width' => 4,
                        'height' => 2
                    ],
                    [
                        'title' => '5″ × 3″',
                        'width' => 5,
                        'height' => 3
                    ]
                ],
                'default-quantity' => [50, 100, 200, 300, 500, 1000, 2000, 3000, 5000, 10000]
            ],
            'square-stickers'  => [
                'name' => 'Square stickers',
                'active' => 1, 
                'description' => "Square stickers, with their timeless design, are versatile for product labels, marketing, decor, or giveaways. Precision-cut for a polished look and crafted from durable materials, they endure water, sunlight, and scratches, ensuring lasting quality and visual appeal.",
                'unit-price' => 100,
                'default-size' => [
                    [
                        'title' => '2″ × 2″',
                        'width' => 2,
                        'height' => 2
                    ],
                    [
                        'title' => '3″ × 3″',
                        'width' => 3,
                        'height' => 3
                    ],
                    [
                        'title' => '4″ × 4″',
                        'width' => 4,
                        'height' => 4
                    ],
                    [
                        'title' => '5″ × 5″',
                        'width' => 5,
                        'height' => 5
                    ]
                ],
                'default-quantity' => [50, 100, 200, 300, 500, 1000, 2000, 3000, 5000, 10000]
                
            ],
            'oval-stickers'  => [
                'name' => 'Oval stickers',
                'active' => 1, 
                'description' => "Oval stickers, distinguished by their unique and curved design, provide versatility for product labels, marketing initiatives, decor, or giveaways. Precision-cut for a refined appearance and crafted from durable materials, these stickers endure water, sunlight, and scratches, ensuring lasting quality and distinctive visual appeal.",
                'unit-price' => 100,
                'default-size' => [
                    [
                        'title' => '3″ × 2″',
                        'width' => 3,
                        'height' => 2
                    ],
                    [
                        'title' => '4″ × 2″',
                        'width' => 4,
                        'height' => 2
                    ],
                    [
                        'title' => '5″ × 3″',
                        'width' => 5,
                        'height' => 3
                    ],
                    [
                        'title' => '6″ × 4″',
                        'width' => 6,
                        'height' => 4
                    ]
                ],
                'default-quantity' => [50, 100, 200, 300, 500, 1000, 2000, 3000, 5000, 10000]
            ],
            'bumper-stickers'  => [
                'name' => 'Bumper stickers',
                'active' => 1, 
                'description' => "Bumper stickers, designed for durability and impact, are ideal for expressing messages on-the-go. Crafted with precision and made from sturdy materials, these stickers endure the rigors of outdoor use, including exposure to weather and road conditions. Whether for personal expression, promotion, or advocacy, bumper stickers are a powerful and lasting way to make a statement.",
                'unit-price' => 100,
                'default-size' => [
                    [
                        'title' => '7.5″ × 3.75″',
                        'width' => 7.5,
                        'height' => 3.75
                    ],
                    [
                        'title' => '11.5″ × 3″',
                        'width' => 11.5,
                        'height' => 3
                    ],
                    [
                        'title' => '15″ × 3.75″',
                        'width' => 15,
                        'height' => 3.75
                    ]
                ],
                'default-quantity' => [50, 100, 200, 300, 500, 1000, 2000, 3000, 5000]
            ],
            'sticker-sheets'  => [
                'name' => 'Sticker sheets',
                'active' => 1, 
                'description' => "Sticker sheets, a versatile platform for creative expression, house multiple uniquely shaped and designed stickers on a single sheet. Ideal for diverse applications, from organized labeling to DIY projects, these sheets offer endless possibilities for customization, branding, or personal expression. Crafted with precision and using durable materials, sticker sheets ensure each sticker stands out and withstands elements like water, sunlight, and scratches, providing a lasting and impactful way to bring your ideas to life.",
                'unit-price' => 100,
                'default-size' => [
                    [
                        'title' => '4″ × 6″',
                        'width' => 4,
                        'height' => 6
                    ],
                    [
                        'title' => '8.5″ × 11″',
                        'width' => 8.5,
                        'height' => 11
                    ]
                ],
                'default-quantity' => [50, 100, 200, 300, 500, 1000, 2000, 3000, 5000]
            ],
            'kiss-cut-stickers'  => [
                'name' => 'Kiss cut stickers',
                'active' => 1, 
                'description' => "Kiss-cut stickers, precision-crafted for versatility, offer a unique way to showcase designs or messages. With intricate cutting and durable materials, these stickers stand out and endure elements like water, sunlight, and scratches, making them perfect for diverse applications.",
                'unit-price' => 100,
                'default-size' => [
                    [
                        'title' => '2″ × 2″',
                        'width' => 2,
                        'height' => 2
                    ],
                    [
                        'title' => '3″ × 3″',
                        'width' => 3,
                        'height' => 3
                    ],
                    [
                        'title' => '4″ × 4″',
                        'width' => 4,
                        'height' => 4
                    ],
                    [
                        'title' => '5″ × 5″',
                        'width' => 5,
                        'height' => 5
                    ]
                ],
                'default-quantity' => [50, 100, 200, 300, 500, 1000, 2000, 3000, 5000, 10000]
            ],
            'round-corner-stickers'  => [
                'name' => 'Round corner stickers',
                'active' => 1, 
                'description' => "Round corner stickers, designed with a touch of sophistication, provide a sleek and polished look for various applications. The distinctive rounded edges set them apart, making them ideal for product labeling, promotions, or creative endeavors. Crafted with precision and durable materials, these stickers not only catch the eye with their unique shape but also withstand elements such as water, sunlight, and scratches, ensuring a lasting impact wherever they're placed.",
                'unit-price' => 100,
                'default-size' => [
                    [
                        'title' => '2″ × 2″',
                        'width' => 2,
                        'height' => 2
                    ],
                    [
                        'title' => '3″ × 3″',
                        'width' => 3,
                        'height' => 3
                    ],
                    [
                        'title' => '4″ × 4″',
                        'width' => 4,
                        'height' => 4
                    ],
                    [
                        'title' => '5″ × 5″',
                        'width' => 5,
                        'height' => 5
                    ]
                ],
                'default-quantity' => [50, 100, 200, 300, 500, 1000, 2000, 3000, 5000, 10000]
            ],
            'clear-stickers'  => [
                'name' => 'Clear stickers',
                'active' => 1, 
                'description' => "Clear stickers, with their transparent allure, offer a subtle and modern way to showcase your designs or messages. The absence of a background allows for seamless integration onto surfaces, making them perfect for a minimalist aesthetic. Crafted with precision and durable materials, these stickers maintain clarity while enduring elements like water, sunlight, and scratches. Elevate your branding or creative projects with the contemporary appeal and resilience of clear stickers, creating a lasting impression with a see-through touch.",
                'unit-price' => 100,
                'default-size' => [
                    [
                        'title' => '2″ × 2″',
                        'width' => 2,
                        'height' => 2
                    ],
                    [
                        'title' => '3″ × 3″',
                        'width' => 3,
                        'height' => 3
                    ],
                    [
                        'title' => '4″ × 4″',
                        'width' => 4,
                        'height' => 4
                    ],
                    [
                        'title' => '5″ × 5″',
                        'width' => 5,
                        'height' => 5
                    ]
                ],
                'default-quantity' => [50, 100, 200, 300, 500, 1000, 2000, 3000, 5000, 10000]
            ],
            'transfer-stickers'  => [
                'name' => 'Transfer stickers',
                'active' => 1, 
                'description' => "Transfer stickers, designed for seamless application, provide a convenient way to transfer intricate designs onto surfaces with precision. These stickers, crafted for versatility, are perfect for personalizing items or showcasing brand logos. With a durable adhesive and precise cutting, transfer stickers ensure a smooth, professional appearance. Whether for branding, creative projects, or personal expression, these stickers make an impact and endure elements like water, sunlight, and scratches, ensuring a lasting impression wherever they're placed.",
                'unit-price' => 100,
                'default-size' => [
                    [
                        'title' => '4″ × 4″',
                        'width' => 4,
                        'height' => 4
                    ],
                    [
                        'title' => '5″ × 5″',
                        'width' => 5,
                        'height' => 5
                    ],
                    [
                        'title' => '6″ × 6″',
                        'width' => 6,
                        'height' => 6
                    ],
                ],
                'default-quantity' => [50, 100, 200, 300, 500, 1000]
            ],
            'vinyl-lettering'  => [
                'name' => 'Vinyl Lettering',
                'active' => 1, 
                'description' => "Vinyl lettering, a sophisticated choice for personalized messaging, brings your words to life with precision and style. Crafted from high-quality vinyl material, these letters offer a sleek and durable solution for a variety of applications. Perfect for signage, décor, or branding, vinyl lettering stands out with its crisp lines and resilience against elements like water, sunlight, and wear. Elevate your messaging or creative projects with the lasting impact and professional finish of vinyl lettering, making a statement that endures.",
                'unit-price' => 100,
                'colors' =>[
                    '#ffffff',
                    '#000000'
                ]
            ],
        ]
    ],
    'labels' => [
        'name' => "Labels",
        'icon' => "",
        "description" => "Effortlessly upload, optimize, and receive your professionally printed order within days. Experience swift and streamlined printing solutions tailored to your needs.",
        'items' => [
            'die-cut-labels' => [
                'name' => "Die cut labels",
                'active' => 1, 
                'description' => "Die-cut labels are custom-shaped, versatile solutions for branding and product labeling. Precision-cut to fit logos or designs, these labels enhance aesthetics and promote a professional presentation. Crafted from durable materials, they resist water, sunlight, and abrasion, ensuring long-lasting visual appeal for brands and businesses.",
                'unit-price' => 100,
                'default-size' => [
                    [
                        'title' => '2″ × 2″',
                        'width' => 2,
                        'height' => 2
                    ],
                    [
                        'title' => '3″ × 3″',
                        'width' => 3,
                        'height' => 3
                    ],
                    [
                        'title' => '4″ × 4″',
                        'width' => 4,
                        'height' => 4
                    ],
                    [
                        'title' => '5″ × 5″',
                        'width' => 5,
                        'height' => 5
                    ]
                ],
                'default-quantity' => [50, 100, 200, 300, 500, 1000, 2000, 3000, 5000, 10000]
            ],
            'clear-labels' => [
                'name' => "Clear labels",
                'active' => 1, 
                'description' => "Clear labels, precision-cut into a classic and timeless shape, offer a versatile and visually appealing solution for various applications. Tailored to fit logos, text, or designs seamlessly, these labels provide a polished presentation for branding, packaging, and product labeling. Crafted with precision and often from durable materials, circle labels endure environmental factors like water, sunlight, and abrasion, ensuring a lasting and attractive impact in diverse contexts.",
                'unit-price' => 100,
                'default-size' => [
                    [
                        'title' => '2″ × 2″',
                        'width' => 2,
                        'height' => 2
                    ],
                    [
                        'title' => '3″ × 3″',
                        'width' => 3,
                        'height' => 3
                    ],
                    [
                        'title' => '4″ × 4″',
                        'width' => 4,
                        'height' => 4
                    ],
                    [
                        'title' => '5″ × 5″',
                        'width' => 5,
                        'height' => 5
                    ]
                ],
                'default-quantity' => [50, 100, 200, 300, 500, 1000, 2000, 3000, 5000, 10000]
            ],
            'circle-labels' => [
                'name' => "Circle labels",
                'active' => 1, 
                'description' => "Circle labels, precision-cut into a classic and timeless shape, offer a versatile and visually appealing solution for various applications. Tailored to fit logos, text, or designs seamlessly, these labels provide a polished presentation for branding, packaging, and product labeling. Crafted with precision and often from durable materials, circle labels endure environmental factors like water, sunlight, and abrasion, ensuring a lasting and attractive impact in diverse contexts.",
                'unit-price' => 100,
                'default-size' => [
                    [
                        'title' => '1″ × 1″',
                        'width' => 1,
                        'height' => 1
                    ],
                    [
                        'title' => '2″ × 2″',
                        'width' => 2,
                        'height' => 2
                    ],
                    [
                        'title' => '3″ × 3″',
                        'width' => 3,
                        'height' => 3
                    ],
                    [
                        'title' => '4″ × 4″',
                        'width' => 4,
                        'height' => 4
                    ]
                ],
                'default-quantity' => [50, 100, 200, 300, 500, 1000, 2000, 3000, 5000, 10000]
            ],
            'square-labels' => [
                
                'name' => "Square labels",
                'active' => 1, 
                'description' => "Square labels, with their timeless design, provide a versatile and polished solution for branding and product labeling. Precision-cut for a clean presentation, these labels, often crafted from durable materials, endure water, sunlight, and abrasion, ensuring a lasting impact in various applications.",
                'unit-price' => 100,
                'default-size' => [
                    [
                        'title' => '2″ × 2″',
                        'width' => 2,
                        'height' => 2
                    ],
                    [
                        'title' => '3″ × 3″',
                        'width' => 3,
                        'height' => 3
                    ],
                    [
                        'title' => '4″ × 4″',
                        'width' => 4,
                        'height' => 4
                    ],
                    [
                        'title' => '5″ × 5″',
                        'width' => 5,
                        'height' => 5
                    ]
                ],
                'default-quantity' => [50, 100, 200, 300, 500, 1000, 2000, 3000, 5000, 10000]
            ],
            'rectangle-labels' => [
                'name' => "Rectangle labels",
                'active' => 1, 
                'description' => "Rectangle labels, with their clean and classic design, provide a versatile and polished solution for branding, packaging, and product labeling. Crafted with precision and often from durable materials, these labels ensure a lasting and professional presentation, resistant to water, sunlight, and abrasion.",
                'unit-price' => 100,
                'default-size' => [
                    [
                        'title' => '2″ × 1″',
                        'width' => 2,
                        'height' => 1
                    ],
                    [
                        'title' => '3″ × 2″',
                        'width' => 3,
                        'height' => 2
                    ],
                    [
                        'title' => '4″ × 2″',
                        'width' => 4,
                        'height' => 2
                    ],
                    [
                        'title' => '5″ × 3″',
                        'width' => 5,
                        'height' => 3
                    ]
                ],
                'default-quantity' => [50, 100, 200, 300, 500, 1000, 2000, 3000, 5000, 10000]
            ],
            
            'rounded-corner-labels' => [
                'name' => "Rounded corner labels",
                'active' => 1, 
                'description' => "Rounded corner labels, with their distinctive and sleek design, offer a unique and polished solution for branding and product labeling. Precision-cut to seamlessly fit logos, text, or designs, these labels present a refined and professional appearance. Crafted with precision and often from durable materials, oval labels endure environmental factors such as water, sunlight, and abrasion, ensuring a lasting and sophisticated impact across diverse applications.",
                'unit-price' => 100,
                'default-size' => [
                    [
                        'title' => '2″ × 2″',
                        'width' => 2,
                        'height' => 2
                    ],
                    [
                        'title' => '3″ × 3″',
                        'width' => 3,
                        'height' => 3
                    ],
                    [
                        'title' => '4″ × 4″',
                        'width' => 4,
                        'height' => 4
                    ],
                    [
                        'title' => '5″ × 5″',
                        'width' => 5,
                        'height' => 5
                    ]
                ],
                'default-quantity' => [50, 100, 200, 300, 500, 1000, 2000, 3000, 5000, 10000]
                
            ],
            'oval-labels' => [
                'name' => "Oval labels",
                'active' => 1, 
                'description' => "Oval labels, with their distinctive and sleek design, offer a unique and polished solution for branding and product labeling. Precision-cut to seamlessly fit logos, text, or designs, these labels present a refined and professional appearance. Crafted with precision and often from durable materials, oval labels endure environmental factors such as water, sunlight, and abrasion, ensuring a lasting and sophisticated impact across diverse applications.",
                'unit-price' => 100,
                'default-size' => [
                    [
                        'title' => '3″ × 2″',
                        'width' => 3,
                        'height' => 2
                    ],
                    [
                        'title' => '4″ × 2″',
                        'width' => 4,
                        'height' => 2
                    ],
                    [
                        'title' => '5″ × 3″',
                        'width' => 5,
                        'height' => 3
                    ]
                ],
                'default-quantity' => [50, 100, 200, 300, 500, 1000, 2000, 3000, 5000, 10000]
            ],
            'circle-sheet-labels' => [
                'name' => "Circle sheet labels",
                'active' => 1, 
                'description' => "Effortlessly brand your products and packaging with our circular sheet labels. Designed for easy hand application, these labels are printed on a durable 8.5” x 11” material that withstands exposure to food, oil, water, and refrigeration. Simplify your labeling process while ensuring durability and a professional presentation.",
                'unit-price' => 100,
                'default-size' => [
                    [
                        'title' => '1″ × 1″',
                        'width' => 1,
                        'height' => 1
                    ],
                    [
                        'title' => '2″ × 2″',
                        'width' => 2,
                        'height' => 2
                    ],
                    [
                        'title' => '3″ × 3″',
                        'width' => 3,
                        'height' => 3
                    ],
                    [
                        'title' => '4″ × 4″',
                        'width' => 4,
                        'height' => 4
                    ]
                ],
                'default-quantity' => [50, 100, 200, 300, 500, 1000, 2000, 3000, 5000, 10000]
            ],
            'die-cut-sheet-labels' => [
                'name' => "Die cut sheet labels",
                'active' => 1, 
                'description' => "Simplify your product branding and packaging with our die-cut sheet labels. Multiple die-cut labels on an 8.5” x 11” sheet ensure easy hand application. Crafted from durable material, these labels stand up to challenges like food, oil, water, and refrigeration. Streamline your labeling process while maintaining durability and achieving a polished, professional look.",
                'unit-price' => 100,
                'default-size' => [
                    [
                        'title' => '1″ × 1″',
                        'width' => 1,
                        'height' => 1
                    ],
                    [
                        'title' => '2″ × 2″',
                        'width' => 2,
                        'height' => 2
                    ],
                    [
                        'title' => '3″ × 3″',
                        'width' => 3,
                        'height' => 3
                    ],
                    [
                        'title' => '4″ × 4″',
                        'width' => 4,
                        'height' => 4
                    ]
                ],
                'default-quantity' => [50, 100, 200, 300, 500, 1000, 2000, 3000, 5000, 10000]
            ],
            'oval-sheet-labels' => [
                'name' => "Oval sheet labels",
                'active' => 1, 
                'description' => "Elevate your product branding effortlessly with our oval sheet labels. Multiple ovals on an 8.5” x 11” sheet offer easy hand application. Printed on durable material, these labels withstand challenges such as exposure to food, oil, water, and refrigeration. Streamline your labeling process while ensuring durability and achieving a refined, professional presentation.",
                'unit-price' => 100,
                'default-size' => [
                    [
                        'title' => '2″ × 1″',
                        'width' => 2,
                        'height' => 1
                    ],
                    [
                        'title' => '3″ × 2″',
                        'width' => 3,
                        'height' => 2
                    ],
                    [
                        'title' => '4″ × 2″',
                        'width' => 4,
                        'height' => 2
                    ],
                    [
                        'title' => '5″ × 3″',
                        'width' => 5,
                        'height' => 3
                    ]
                ],
                'default-quantity' => [50, 100, 200, 300, 500, 1000, 2000, 3000, 5000, 10000]
            ],
            'rectangle-sheet-labels' => [
                'name' => "Rectangle sheet labels",
                'active' => 1, 
                'description' => "Streamline your product branding and labeling process with our rectangle sheet labels. Multiple rectangles on an 8.5” x 11” sheet make hand application a breeze. Crafted from durable material, these labels resist food, oil, water, and refrigeration exposure. Simplify your workflow while ensuring durability and presenting a clean, professional image.",
                'unit-price' => 100,
                'default-size' => [
                    [
                        'title' => '2″ × 1″',
                        'width' => 2,
                        'height' => 1
                    ],
                    [
                        'title' => '3″ × 2″',
                        'width' => 3,
                        'height' => 2
                    ],
                    [
                        'title' => '4″ × 2″',
                        'width' => 4,
                        'height' => 2
                    ],
                    [
                        'title' => '5″ × 3″',
                        'width' => 5,
                        'height' => 3
                    ]
                ],
                'default-quantity' => [50, 100, 200, 300, 500, 1000, 2000, 3000, 5000, 10000]
            ],
            'rounded-corner-sheet-labels' => [
                'name' => "Rounded corner sheet labels",
                'active' => 1, 
                'description' => "Effortlessly enhance your product branding and labeling with our rounded corner sheet labels. Featuring multiple labels on an 8.5” x 11” sheet, these rounded corners add a touch of sophistication. Designed for easy hand application, the labels are crafted from durable material, standing up to challenges like food, oil, water, and refrigeration. Simplify your labeling process while ensuring durability and presenting a sleek and professional appearance.",
                'unit-price' => 100,
                'default-size' => [
                    [
                        'title' => '1″ × 1″',
                        'width' => 1,
                        'height' => 1
                    ],
                    [
                        'title' => '2″ × 2″',
                        'width' => 2,
                        'height' => 2
                    ],
                    [
                        'title' => '3″ × 3″',
                        'width' => 3,
                        'height' => 3
                    ],
                    [
                        'title' => '4″ × 4″',
                        'width' => 4,
                        'height' => 4
                    ]
                ],
                'default-quantity' => [50, 100, 200, 300, 500, 1000, 2000, 3000, 5000, 10000]
            ],
            'square-sheet-labels' => [
                'name' => "Square sheet labels",
                'active' => 1, 
                'description' => "Simplify your product branding and labeling with our square sheet labels. Multiple squares on an 8.5” x 11” sheet ensure easy hand application. Crafted from durable material, these labels resist challenges such as exposure to food, oil, water, and refrigeration. Streamline your labeling process while ensuring durability and presenting a clean, professional image.",
                'unit-price' => 100,
                'default-size' => [
                    [
                        'title' => '1″ × 1″',
                        'width' => 1,
                        'height' => 1
                    ],
                    [
                        'title' => '2″ × 2″',
                        'width' => 2,
                        'height' => 2
                    ],
                    [
                        'title' => '3″ × 3″',
                        'width' => 3,
                        'height' => 3
                    ],
                    [
                        'title' => '4″ × 4″',
                        'width' => 4,
                        'height' => 4
                    ]
                ],
                'default-quantity' => [50, 100, 200, 300, 500, 1000, 2000, 3000, 5000, 10000]
            ],
        ]
    ],
    'magnets' => [
        'name' => "Magnets",
        'icon' => "",
        'description' => "Effortlessly transform your designs into custom magnets. Benefit from expert optimization, and receive professionally printed magnets delivered promptly within days. Experience swift and tailored solutions for your magnetic needs.",
        "items" => [
            'custom-magnets' => [
                'name' => "Custom magnets",
                'active' => 1, 
                'description' => "Transform your space with our custom magnets, a unique and personalized touch for any occasion. Crafted to your specifications, these magnets offer a versatile way to showcase your brand, commemorate events, or add a personal touch to your space. Whether for promotional purposes or as thoughtful gifts, our custom magnets provide a durable and eye-catching solution. Elevate your message with a magnetic presence that sticks around.",
                'unit-price' => 100,
                'default-size' => [
                    [
                        'title' => '2″ × 2″',
                        'width' => 2,
                        'height' => 2
                    ],
                    [
                        'title' => '3″ × 3″',
                        'width' => 3,
                        'height' => 3
                    ],
                    [
                        'title' => '4″ × 4″',
                        'width' => 4,
                        'height' => 4
                    ],
                    [
                        'title' => '5″ × 5″',
                        'width' => 5,
                        'height' => 5
                    ]
                ],
                'default-quantity' => [50, 100, 200, 300, 500, 1000, 2000, 3000, 5000]
            ]
        ]
    ],
    'custom-button' => [
        'name' => "Buttons",
        'icon' =>  "",
        'description' => "Our button printing service transforms your unique designs, logos, or messages into eye-catching pin-backed accessories. With vibrant and high-quality printing, our custom buttons serve as a dynamic and engaging promotional or decorative solution",
        'items' => [
            '1-round-buttons' => [
                'name' => "1” Round buttons",
                'active' => 1, 
                'description' => "Introducing our small custom round buttons – vibrant and versatile with full-color printing and a sturdy steel pin-back. Perfect for effortless wearing, distributing, or selling, these buttons are the ideal choice for organizations, businesses, bands, and events. Add a pop of color to your message and make a lasting impression with these portable and eye-catching accessories.",
                'unit-price' => 100,
                'default-size' => [
                    [
                        'title' => '1″ × 1″',
                        'width' => 1,
                        'height' => 1
                    ],
                    [
                        'title' => '1.25″ × 1.25″',
                        'width' => 1.25,
                        'height' => 1.25
                    ],
                    [
                        'title' => '1.5″ × 1.5″',
                        'width' => 1.5,
                        'height' => 1.5
                    ],
                    [
                        'title' => '2.25″ × 2.25″',
                        'width' => 2.25,
                        'height' => 2.25
                    ]
                ],
                'default-quantity' => [50, 100, 200, 300, 500, 1000, 2000, 3000]
            ],
            '125-round-buttons' => [
                'name' => "1.25” Round buttons",
                'active' => 1, 
                'description' => "Introducing our 1.25” custom round buttons – vibrant and versatile with full-color printing and a sturdy steel pin-back. Perfect for effortless wearing, distributing, or selling, these buttons are the ideal choice for organizations, businesses, bands, and events. Add a pop of color to your message and make a lasting impression with these portable and eye-catching accessories.",
                'unit-price' => 100,
                'default-size' => [
                    [
                        'title' => '1″ × 1″',
                        'width' => 1,
                        'height' => 1
                    ],
                    [
                        'title' => '1.25″ × 1.25″',
                        'width' => 1.25,
                        'height' => 1.25
                    ],
                    [
                        'title' => '1.5″ × 1.5″',
                        'width' => 1.5,
                        'height' => 1.5
                    ],
                    [
                        'title' => '2.25″ × 2.25″',
                        'width' => 2.25,
                        'height' => 2.25
                    ]
                ],
                'default-quantity' => [50, 100, 200, 300, 500, 1000, 2000, 3000]
            ],
            '15-round-buttons' => [
                'name' => "1.5” Round buttons",
                'active' => 1, 
                'description' => "Introducing our 1.5” custom round buttons – vibrant and versatile with full-color printing and a sturdy steel pin-back. Perfect for effortless wearing, distributing, or selling, these buttons are the ideal choice for organizations, businesses, bands, and events. Add a pop of color to your message and make a lasting impression with these portable and eye-catching accessories.",
                'unit-price' => 100,
                'default-size' => [
                    [
                        'title' => '1″ × 1″',
                        'width' => 1,
                        'height' => 1
                    ],
                    [
                        'title' => '1.25″ × 1.25″',
                        'width' => 1.25,
                        'height' => 1.25
                    ],
                    [
                        'title' => '1.5″ × 1.5″',
                        'width' => 1.5,
                        'height' => 1.5
                    ],
                    [
                        'title' => '2.25″ × 2.25″',
                        'width' => 2.25,
                        'height' => 2.25
                    ]
                ],
                'default-quantity' => [50, 100, 200, 300, 500, 1000, 2000, 3000]
            ],
            '225-round-buttons' => [
                'name' => "2.25” Round buttons",
                'active' => 1, 
                'description' => "Introducing our 2.25” custom round buttons – vibrant and versatile with full-color printing and a sturdy steel pin-back. Perfect for effortless wearing, distributing, or selling, these buttons are the ideal choice for organizations, businesses, bands, and events. Add a pop of color to your message and make a lasting impression with these portable and eye-catching accessories.",
                'unit-price' => 100,
                'default-size' => [
                    [
                        'title' => '1″ × 1″',
                        'width' => 1,
                        'height' => 1
                    ],
                    [
                        'title' => '1.25″ × 1.25″',
                        'width' => 1.25,
                        'height' => 1.25
                    ],
                    [
                        'title' => '1.5″ × 1.5″',
                        'width' => 1.5,
                        'height' => 1.5
                    ],
                    [
                        'title' => '2.25″ × 2.25″',
                        'width' => 2.25,
                        'height' => 2.25
                    ]
                ],
                'default-quantity' => [50, 100, 200, 300, 500, 1000, 2000, 3000]
            ],
            'custom-pins' => [
                'name' => "Cutton pins",
                'active' => 1, 
                'description' => "Introducing our custom pins – vibrant and versatile with full-color printing and a sturdy steel pin-back. Perfect for effortless wearing, distributing, or selling, these buttons are the ideal choice for organizations, businesses, bands, and events. Add a pop of color to your message and make a lasting impression with these portable and eye-catching accessories.",
                'unit-price' => 100,
                'default-size' => [
                    [
                        'title' => '1″ × 1″',
                        'width' => 1,
                        'height' => 1
                    ],
                    [
                        'title' => '1.25″ × 1.25″',
                        'width' => 1.25,
                        'height' => 1.25
                    ],
                    [
                        'title' => '1.5″ × 1.5″',
                        'width' => 1.5,
                        'height' => 1.5
                    ],
                    [
                        'title' => '1.75″ × 1.75″',
                        'width' => 1.75,
                        'height' => 1.75
                    ]
                ],
                'default-quantity' => [50, 100, 200, 300, 500, 1000, 2000, 3000]
            ],
        ]
    ],
    'packaging' => [
        'name' => "Packaging",
        'icon' => "",
        'description' => "Our packaging tape service offers a seamless solution for branding your shipments. Elevate your brand exposure and enhance package deliverability with our reinforced gummed paper tape. Water-activated for secure box sealing, our custom packaging tape ensures a professional and distinctive touch to your shipments.",
        'items' => [
            'packaging-tapes' => [
                'name' => "Packaging tapes",
                'active' => 1, 
                'description' => "Packaging tape is a type of adhesive tape specifically designed for sealing and securing packages. It plays a crucial role in packaging, ensuring that boxes and parcels are securely sealed during transit. Packaging tape is commonly made from materials such as polypropylene, PVC, or paper, and it often comes with various adhesive options, including acrylic or hot melt adhesives.",
                'unit-price' => 100,
                'length' => [100, 300, 1500, 3000, 6000, 9000, 12000, 15000]
            ],
            'poly-mailers' => [
                'name' => "Poly mailers",
                'active' => 1, 
                'description' => "Poly mailers, also known as polyethylene mailers or plastic mailing bags, are lightweight and durable packaging envelopes made from polyethylene material. These mailers are commonly used for shipping and mailing purposes, providing a cost-effective and efficient way to send various items.",
                'unit-price' => 100,
                'default-size' => [
                    [
                        'title' => '7.5″ × 10.5″',
                        'width' => 7.5,
                        'height' => 10.5
                    ],
                    [
                        'title' => '10″ × 13″',
                        'width' => 10,
                        'height' => 13
                    ],
                    [
                        'title' => '14.5″ × 19″',
                        'width' => 14.5,
                        'height' => 19
                    ]
                ],
                'default-quantity' => [50, 100, 200, 300, 500, 1000, 2000, 3000, 5000]
            ],
            'bubble-mailers' => [
                'name' => "Bubble mailers",
                'active' => 1, 
                'description' => "Bubble mailers, also known as bubble envelopes or padded mailers, are packaging envelopes designed for shipping and protecting items that require cushioning during transit. They typically consist of a padded interior layer with bubble wrap material and an outer layer made of paper, plastic, or a combination of both",
                'unit-price' => 100,
                'default-size' => [
                    [
                        'title' => '7.5″ × 10.5″',
                        'width' => 7.5,
                        'height' => 10.5
                    ],
                    [
                        'title' => '5″ × 9″',
                        'width' => 5,
                        'height' => 9
                    ],
                    [
                        'title' => '7.5″ × 10.5″',
                        'width' => 7.5,
                        'height' => 10.5
                    ],
                    [
                        'title' => '10″ × 13″',
                        'width' => 10,
                        'height' => 13
                    ],
                    [
                        'title' => '14.5″ × 19″',
                        'width' => 14.5,
                        'height' => 19
                    ]
                ],
                'default-quantity' => [50, 100, 200, 300, 500, 1000, 2000, 3000, 5000]
            ],
            'stand-up-punches' => [
                'name' => "Stand up punches",
                'active' => 1, 
                'description' => "Stand-up pouches are versatile and visually appealing packaging solutions commonly used across industries. With a flat bottom gusset for stability, these pouches stand upright on shelves, providing an excellent display for various products. Their flexible material, resealable options, and customizable printing make them suitable for a wide range of items. Stand-up pouches offer barrier properties for product protection and can be designed with environmentally friendly materials. Lightweight and reducing packaging waste, these pouches have become a popular choice for companies looking for efficient, eye-catching, and sustainable packaging solutions.",
                'unit-price' => 100,
                'default-size' => [
                    [
                        'title' => '5″ × 6″',
                        'width' => 5,
                        'height' => 6
                    ],
                    [
                        'title' => '7.75″ × 10″',
                        'width' => 7.75,
                        'height' => 10
                    ]
                ],
                'default-quantity' => [50, 100, 200, 300, 500, 1000]
            ],
        ]
    ],
    't-shirts' => [
        'name' => "T-shirts",
        'icon' => "",
        'description' => "Experience personalized style with our custom T-shirt printing service. Transform your unique designs into vibrant, wearable art. Our high-quality printing ensures your T-shirts make a statement, whether for personal expression or branding purposes.",
        'items' => [
            'custom-prints-on-t-shirts' => [
                'name' => "Custom Prints on T-shirts",
                'active' => 1, 
                'description' => "Custom prints on T-shirts involve personalized designs, logos, or text applied to T-shirts through various printing techniques such as screen printing, direct-to-garment printing, or heat transfer. This customization allows for a wide range of color options, fabric choices, and is suitable for both individual and bulk orders. It serves personal expressions, commemorates events, and is widely used by businesses for branding and team identity. The process is facilitated through online platforms, ensuring quality and durability in the final printed T-shirts.",
                'unit-price' => 100,
                'colors' => ['#000000', '#FFFFFF', '#324D68', '#CCCCCC', '#FF9151', '#73BB7D']
            ]
        ]
    ]
];
