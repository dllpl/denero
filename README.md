# denero

ЗАДАЧА #1 (ООП)
Создать класс Item, который не наследуется. В конструктор класса передается ID объекта.
Описать свойства (int) id, (string) name, (int) status, (bool) changed. Свойства доступны только внутри класса.
Создать метод init(). Предусмотреть одноразовый вызов метода.
Метод доступен только внутри класса.
Метод получает из таблицы objects. данные name и status и заполняет их в свойства экземпляра (реализация работы с базой не требуется, представим что класс уже работает с бд). Эти данные также необходимо хранить в сыром виде внутри объекта, до сохранения.
Сделать возможным получение свойств объекта, используя magic methods.
Сделать возможным задание свойств объекта, используя magic methods с проверкой вводимого значения на заполненность и тип значения. Свойство ID не поддается записи.
Создать метод save().
Метод публичный.
Метод сохраняет установленные значения name и status в случае, если свойства объекта были изменены извне.
Класс должен быть задокументирован в стиле PHPDocumentor.

ЗАДАЧА #2 (SQL ЗАПРОСЫ)
Есть несколько таблиц в БД: users, objects
users: id, login, password, object_id
objects: id, name, status
Нужно сделать выборку пользователей из базы данных с использованием конструкции JOIN у которых есть запись в таблице objects, соответствующая значению object_id

ЗАДАЧА #3 (JQUERY)
Написать функцию перехвата нажатия клавиш left arrow, right arrow, up arrow, down arrow
При нажатии на любую из клавиш появляется alert с названием нажатой клавиши
Запрещается использовать любые плагины, которые осуществляют перехват нажатых клавиш
Необходимо продолжать результат действия этих клавиш после закрытия alert
