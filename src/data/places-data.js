const places = [
    {
        name: 'Дальневосточный морской',
        object_name: 'Заповедник',
        location: 'c-42.489354-130.896275',
        cost: null,
        cost_per: null,
        type: 'sunctuary',
        tours: null,
        objects: [
            {
                name: 'Остров Фуругельма',
                type: 'island',
                tours: [
                    {
                        name: 'Экскурсия "Природа моря и ее охрана"',
                        cost: 1500,
                        duration: 1,
                        duration_unit: 'часы',
                    },
                ]
            },
            {
                name: 'Остров Верховского',
                type: 'island',
                tours: [
                    {
                        name: 'Экскурсия по археологическому комплексу "Наследие"',
                        cost: 500,
                        duration: 1,
                        duration_unit: 'часы',
                    },
                ]
            },
            {
                name: 'Сопка Голубиный утес',
                type: 'hill',
                tours: [
                    {
                        name: 'Экологическая тропа "Мыс Проходной"',
                        cost: 2000,
                        duration: 2.5,
                        duration_unit: 'часы',
                    },
                ]
            },
            {
                name: 'Сопка Сюдари',
                type: 'hill',
                tours: [
                    {
                        name: 'Экскурсия "Экология друвнего человека"',
                        cost: 1000,
                        duration: 2,
                        duration_unit: 'часы',
                    },
                ]
            },
            {
                name: 'Лагуна Огородная',
                type: 'other',
                tours: [
                    {
                        name: 'Экскурсия на литораль',
                        cost: 550,
                        duration: 2.5,
                        duration_unit: 'часы',
                    },
                ]
            },
            {
                name: 'Озеро Большое Круглое',
                type: 'lake',
                tours: null
            },
        ]
    },
    {
        name: 'Кедровая падь',
        object_name: 'Заповедник',
        location: 'c-43.102303-131.478283',
        cost: null,
        cost_per: null,
        type: 'sunctuary',
        tours: [
            {
                name: 'Пеший маршрут "Шагами заповедей"',
                cost: 9000,
                duration: 3,
                duration_unit: 'часы',
            },
        ],
        objects: [
            {
                name: 'Гостевой дом заповедника',
                type: 'other',
                tours: [
                    {
                        name: 'Пеший маршрут "К сердцу Кедровой пади"',
                        cost: 1400,
                        duration: 5,
                        duration_unit: 'часы',
                    },
                ]
            },
        ]
    },
    {
        name: 'Лазовский',
        object_name: 'Заповедник',
        location: 'c-43.140837-133.943952',
        cost: null,
        cost_per: null,
        type: 'sunctuary',
        tours: null,
        objects: [
            {
                name: 'Озеро Заря',
                type: 'lake',
                tours: [
                    {
                        name: 'Пеший маршрут "Сквозь века"',
                        cost: 720,
                        duration: 4,
                        duration_unit: 'часы',
                    },
                ]
            },
            {
                name: 'Кекуры в бухте Проселочная',
                type: 'other',
                tours: [
                    {
                        name: 'Пеший маршрут "Тропою тигра"',
                        cost: 480,
                        duration: 2,
                        duration_unit: 'часы',
                    },
                ]
            },
            {
                name: 'Остров Петрова',
                type: 'island',
                tours: [
                    {
                        name: 'Пеший маршрут "Остров, остановивший время"',
                        cost: 950,
                        duration: 2,
                        duration_unit: 'часы',
                    },
                ]
            },
        ]
    },
    {
        name: 'Ханкайский',
        object_name: 'Заповедник',
        location: 'c-44.552056-132.470047',
        cost: null,
        cost_per: null,
        type: 'sunctuary',
        tours: null,
        objects: [
            {
                name: 'Музей природы',
                type: 'museum',
                tours: [
                    {
                        name: 'Пеший маршрут "Участок Речной"',
                        cost: 520,
                        duration: 3,
                        duration_unit: 'часы',
                    },
                ]
            },
            {
                name: 'Река Илистая',
                type: 'river',
                tours: [
                    {
                        name: 'Пеший маршрут "Участок Журавлиный"',
                        cost: 400,
                        duration: 3,
                        duration_unit: 'часы',
                    },
                ]
            },
            {
                name: 'Озера Ханка',
                type: 'lake',
                tours: [
                    {
                        name: 'Посещение Инфоцентра',
                        cost: 200,
                        duration: 2,
                        duration_unit: 'часы',
                    },
                ]
            },
        ]
    },
    {
        name: 'Сихотэ-Алинский',
        object_name: 'Заповедник',
        location: 'c-45.04911-136.6203876',
        cost: null,
        cost_per: null,
        type: 'sunctuary',
        tours: null,
        objects: [
            {
                name: 'Река Черемуховая',
                type: 'river',
                tours: [
                    {
                        name: 'Экологическая тропа "Гора лысая"',
                        cost: 3500,
                        duration: 7,
                        duration_unit: 'часы',
                    },
                ]
            },
            {
                name: 'Маяк на мысе Белкина',
                type: 'lighthouse',
                tours: [
                    {
                        name: 'Экологическая тропа "Бухта Голубиная"',
                        cost: 3500,
                        duration: 7,
                        duration_unit: 'часы',
                    },
                ]
            },
            {
                name: 'Река Серебрянка',
                type: 'river',
                tours: [
                    {
                        name: 'Экологическая тропа "Урочище Кабаний"',
                        cost: 200,
                        duration: 6,
                        duration_unit: 'часы',
                    },
                ]
            },
            {
                name: 'Гора Абрек',
                type: 'mount',
                tours: [
                    {
                        name: 'Экологическая тропа "Мыс Северный"',
                        cost: 2000,
                        duration: 3,
                        duration_unit: 'часы',
                    },
                ]
            },
            {
                name: 'Гора Лысая',
                type: 'mount',
                tours: [
                    {
                        name: 'Экологическая тропа "Озеро Благодатное"',
                        cost: 2000,
                        duration: 3,
                        duration_unit: 'часы',
                    },
                ]
            },
        ]
    },
    {
        name: 'Кедр Хаус',
        object_name: 'Отель',
        location: 't-г.Артем, ул.1-я Западная, 28',
        cost: 11500,
        cost_per: 'сутки',
        type: 'hotel',
        tours: null,
        objects: null
    },
    {
        name: 'ALOHA',
        object_name: 'Капсульный отель',
        location: 't-г.Владивосток, просп.Океанский, 29',
        cost: 926,
        cost_per: 'сутки',
        type: 'hotel',
        tours: null,
        objects: null
    },
    {
        name: 'Аврора Парк',
        object_name: 'Отель',
        location: 't-г.Владивосток, ул.12-я, 8',
        cost: 3060,
        cost_per: 'сутки',
        type: 'hotel',
        tours: null,
        objects: null
    },
    {
        name: 'Седанка Парк',
        object_name: 'Отель',
        location: 't-г.Владивосток, ул.Менделеева, 14',
        cost: 4950,
        cost_per: 'сутки',
        type: 'hotel',
        tours: null,
        objects: null
    },
    {
        name: 'Lido Central Hotel',
        object_name: 'Отель',
        location: 't-г.Владивосток, ул.Посьетская, 14',
        cost: 2300,
        cost_per: 'сутки',
        type: 'hotel',
        tours: null,
        objects: null
    },
    {
        name: 'Владивосток',
        object_name: 'Хостел',
        location: 't-г.Владивосток, ул.Светланская, 23',
        cost: 1500,
        cost_per: 'сутки',
        type: 'hotel',
        tours: null,
        objects: null
    },
    {
        name: 'Лодж',
        object_name: 'Отель',
        location: 't-г.Владивосток, ул.Светланская, 51',
        cost: 3645,
        cost_per: 'сутки',
        type: 'hotel',
        tours: null,
        objects: null
    },
    {
        name: 'Ливадия',
        object_name: 'Пляж',
        location: 'с-42.853821-132.606561',
        cost: 0,
        cost_per: null,
        type: 'beach',
        tours: null,
        objects: null
    },
    {
        name: 'Волчанец',
        object_name: 'Пляж',
        location: 'с-42.908198-132.767829',
        cost: 0,
        cost_per: null,
        type: 'beach',
        tours: null,
        objects: null
    },
    {
        name: 'Ахлестышева',
        object_name: 'Бухта',
        location: 'с-42.999098-131.932813',
        cost: 0,
        cost_per: null,
        type: 'beach',
        tours: null,
        objects: null
    },
    {
        name: 'Новый Аякс',
        object_name: 'Пляж',
        location: 'с-43.041284-131.891883',
        cost: 0,
        cost_per: null,
        type: 'beach',
        tours: null,
        objects: null
    },
    {
        name: 'Шамора',
        object_name: 'Пляж',
        location: 'с-43.193698-132.113013',
        cost: 0,
        cost_per: null,
        type: 'beach',
        tours: null,
        objects: null
    },
]


export default places;