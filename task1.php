<?php

/**
 * Решение задачи №1 (ООП)
 *
 * @author Nikita Ivanov <nikita03.1998@mail.ru>
 * @version 1.0
 */
final class Item
{

    /**
     * @var int
     */
    private int $id;
    /**
     * @var string
     */
    private string $name;
    /**
     * @var int
     */
    private int $status;
    /**
     * @var bool
     */
    private bool $changed;

    /**
     * Item constructor.
     * @param $id
     */
    public function __construct($id)
    {
        $this->id = $id;
        $this->init($id);
    }

    /**
     * magic method __set
     * Задание свойств объекта с проверкой вводимого значения на заполненность и тип
     * @param $prop
     * @param $value
     */
    public function __set($prop, $value)
    {
        if ($prop === 'name' && is_string($value) && !empty(trim($value))) {
            $this->name = $value;
            $this->save($prop, $value);
        } else if ($prop === 'status' && is_int($value)) {
            $this->status = $value;
            $this->save($prop, $value);
        } else if ($prop === 'changed' && is_bool($value)) {
            $this->changed = $value;
        } else echo 'Ошибка: проверьте тип вводимых данных';
    }

    /**
     * magic method __get
     * Получение свойств объекта
     * @param $prop
     * @return bool|int|string
     */
    public function __get($prop)
    {
        switch ($prop) {
            case 'name':
                return $this->name;
            case 'id':
                return $this->id;
            case 'status':
                return $this->status;
            case 'changed':
                return $this->changed;
        }
    }

    /**
     * Метод работы с БД
     * Метод получает из таблицы objects данные name и status и заполняет их в свойства экземпляра. Эти данные также необходимо хранить в сыром виде внутри объекта, до сохранения.
     * $table_date - данные, полученные со стороны сервера по из таблицы objects по ID.
     * $object_name - сохранение данных в сыром виде
     * $object_status - сохранение данных в сыром виде
     * @param $id
     */
    private function init($id)
    {
        $table_date = [
            'id' => $id,
            'name' => 'Test',
            'status' => true
        ];
        $this->name = $table_date['name'];
        $this->status = $table_date['status'];

        $object_name = $table_date['name'];
        $object_status = $table_date['status'];
    }

    /**
     * Метод сохраняет установленные значения name и status /как я понимаю в БД происходит сохранение/
     * $save_in_table - "сохранение в БД".
     * @param $prop
     * @param $value
     */
    public function save($prop, $value)
    {
        $save_in_table = [
            'id' => $this->id,
            $prop => $value,
        ];
        echo 'Данные успешно сохранены в БД: ';
        print_r($save_in_table);
    }
}

$obj = new Item(5);

$obj->name='Nikita';










