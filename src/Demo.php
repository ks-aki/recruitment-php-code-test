<?php


namespace App;


class Demo
{

    public function testGetUserInfo()
    {
        $userId = 1;
        try {
            $data = $this->getUserInfo($userId);
            print_r($data);
        } catch (\Throwable $throwable) {
            echo $throwable->getMessage();
        }
    }

    public function getUserInfo(int $userId): array
    {
        return [
            "error" => 0,
            "data" => [
                "id" => 1,
                "username" => "hello world"
            ]
        ];
    }
}