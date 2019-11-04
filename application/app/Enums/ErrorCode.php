<?php
namespace App\Enums;

/**
 *
 *
 * @author takuya
 */
class ErrorCode extends Enums
{
    const AI_NAVIGATION_SEARCH_BRANCH_CODE_NOT_NUMERIC = "1001";
    const AI_NAVIGATION_SEARCH_CATEGORY_NOT_NUMERIC = "1002";
    const AI_NAVIGATION_SEARCH_COMPANY_CODE_NOT_NUMERIC = "1003";
    const AI_NAVIGATION_SEARCH_ACCRUAL_DATE_FROM_NOT_DATE = "1004";
    const AI_NAVIGATION_SEARCH_ACCRUAL_DATE_TO_NOT_DATE = "1005";
    const AI_NAVIGATION_SEARCH_ACCRUAL_DATE_IN_VALID_RANGE = "1006";
    const AI_NAVIGATION_SEARCH_USER_ID_NOT_NUMERIC = "1007";

    const AI_NAVIGATION_SEARCH_BRANCH_CODE_REQUIRED_WITHOUT_CATEGORY = "1014";
    const AI_NAVIGATION_SEARCH_BRANCH_CODE_REQUIRED_IF_CATEGORY_FINANCE = "1015";
    const AI_NAVIGATION_SEARCH_BRANCH_CODE_REQUIRED_IF_CATEGORY_OPERATION = "1016";
    /**
     * 取引先検索
     */
    const COMPANY_SEARCH_COMPANY_CODE_NOT_NUMERIC = "1008";
    const COMPANY_SEARCH_BRANCH_CODE_NOT_NUMERIC = "1009";
    const COMPANY_SEARCH_CATEGORY_NOT_NUMERIC = "1010";
    const COMPANY_SEARCH_PICK_UP_FLG_NOT_NUMERIC = "1011";
    const COMPANY_SEARCH_COMPANY_ID_NOT_NUMERIC = "1012";
    const COMPANY_SEARCH_USER_ID_NOT_NUMERIC = "1013";

    const PICK_UP_SEARCH_PICK_UP_REASON_NOT_NUMERIC = "1017";
    const PICK_UP_SEARCH_USER_ID_NOT_NUMERIC = "1018";
    const PICK_UP_SEARCH_BRANCH_CODE_NOT_NUMERIC = "1019";
    const PICK_UP_SEARCH_REGISTERED_TIME_FROM_NOT_DATE = "1020";
    const PICK_UP_SEARCH_REGISTERED_TIME_TO_NOT_DATE = "1021";
    const PICK_UP_SEARCH_COMPANY_CODE_NOT_NUMERIC = "1022";

    const BANK_USER_EDIT_BRANCH_CODE_REQUIRED = "1023";
    const BANK_USER_EDIT_BRANCH_CODE_NOT_NUMERIC = "1024";
    const BANK_USER_EDIT_MAIL_NOT_SAME_REENTER = "1025";
    const BANK_USER_EDIT_ROLE_CODE_REQUIRED = "1026";
    const BANK_USER_EDIT_USER_CODE_REQUIRED = "1027";
    const BANK_USER_EDIT_IS_ROCK_REQUIRED = "1028";
    const BANK_USER_EDIT_PASSWORD_REQUIRED = "1029";
    const BANK_USER_EDIT_PASSWORD_CHANGE_DATE_NOT_DATE = "1030";
    const BANK_USER_EDIT_MAIL_NOT_EMAIL_ADDRESS = "1031";
    const BANK_USER_EDIT_ROLE_CODE_NOT_NUMERIC = "1032";
    const BANK_USER_EDIT_USER_CODE_UNIQUE = "1033";
    const BANK_USER_EDIT_PASSWORD_NOT_SAME_REENTER = "1034";
    const BANK_USER_EDIT_PASSWORD_POLICY = "1035";
    const BANK_USER_EDIT_PASSWORD_HISTORY_EXIST = "1036";

    const UNKNOWN_ERROR = "9000";
    const COUNT_EMPTY = "9001";
    const CONTENT_EMPTY = "9002";
    const ACCOUNT_LOCK = "9003";
    const INVALID_REQUEST = "9999";

    public static function getValueList(): array
    {
        $list = array();
        $list[self::AI_NAVIGATION_SEARCH_BRANCH_CODE_NOT_NUMERIC] = array("code" => ErrorCode::AI_NAVIGATION_SEARCH_BRANCH_CODE_NOT_NUMERIC,"message" => "取引支店名の値が不正です");
        $list[self::AI_NAVIGATION_SEARCH_CATEGORY_NOT_NUMERIC] = array("code" => ErrorCode::AI_NAVIGATION_SEARCH_CATEGORY_NOT_NUMERIC,"message" => "カテゴリの値が不正です");
        $list[self::AI_NAVIGATION_SEARCH_COMPANY_CODE_NOT_NUMERIC] = array("code" => ErrorCode::AI_NAVIGATION_SEARCH_COMPANY_CODE_NOT_NUMERIC,"message" => "取引先IDに数字以外の値が入力されました");
        $list[self::AI_NAVIGATION_SEARCH_ACCRUAL_DATE_FROM_NOT_DATE] = array("code" => ErrorCode::AI_NAVIGATION_SEARCH_ACCRUAL_DATE_FROM_NOT_DATE,"message" => "発生日(From)に日付を入力してください");
        $list[self::AI_NAVIGATION_SEARCH_ACCRUAL_DATE_TO_NOT_DATE] = array("code" => ErrorCode::AI_NAVIGATION_SEARCH_ACCRUAL_DATE_TO_NOT_DATE,"message" => "発生日(To)に日付を入力してください");
        $list[self::AI_NAVIGATION_SEARCH_ACCRUAL_DATE_IN_VALID_RANGE] = array("code" => ErrorCode::AI_NAVIGATION_SEARCH_ACCRUAL_DATE_IN_VALID_RANGE,"message" => "発生日に有効な範囲を指定してください");
        $list[self::AI_NAVIGATION_SEARCH_USER_ID_NOT_NUMERIC] = array("code" => ErrorCode::AI_NAVIGATION_SEARCH_USER_ID_NOT_NUMERIC,"message" => "担当者の値が不正です");
        $list[self::AI_NAVIGATION_SEARCH_BRANCH_CODE_REQUIRED_WITHOUT_CATEGORY] = array("code" => ErrorCode::AI_NAVIGATION_SEARCH_BRANCH_CODE_REQUIRED_WITHOUT_CATEGORY,"message" => "[取引支店名]または[カテゴリ]を選択してください。");
        $list[self::AI_NAVIGATION_SEARCH_BRANCH_CODE_REQUIRED_IF_CATEGORY_FINANCE] = array("code" => ErrorCode::AI_NAVIGATION_SEARCH_BRANCH_CODE_REQUIRED_IF_CATEGORY_FINANCE,"message" => "[カテゴリ：財務]の場合、該当データが多すぎるため、取引支店名も選択してください");
        $list[self::AI_NAVIGATION_SEARCH_BRANCH_CODE_REQUIRED_IF_CATEGORY_OPERATION] = array("code" => ErrorCode::AI_NAVIGATION_SEARCH_BRANCH_CODE_REQUIRED_IF_CATEGORY_OPERATION,"message" => "[カテゴリ：経営]の場合、該当データが多すぎるため、取引支店名も選択してください");

        $list[self::COMPANY_SEARCH_COMPANY_CODE_NOT_NUMERIC] = array("code" => ErrorCode::COMPANY_SEARCH_COMPANY_CODE_NOT_NUMERIC,"message" => "取引先IDに数字以外の値が入力されました");
        $list[self::COMPANY_SEARCH_BRANCH_CODE_NOT_NUMERIC] = array("code" => ErrorCode::COMPANY_SEARCH_BRANCH_CODE_NOT_NUMERIC,"message" => "取引支店名の値が不正です");
        $list[self::COMPANY_SEARCH_CATEGORY_NOT_NUMERIC] = array("code" => ErrorCode::COMPANY_SEARCH_CATEGORY_NOT_NUMERIC,"message" => "業種の値が不正です");
        $list[self::COMPANY_SEARCH_PICK_UP_FLG_NOT_NUMERIC] = array("code" => ErrorCode::COMPANY_SEARCH_PICK_UP_FLG_NOT_NUMERIC,"message" => "ピックアップの値が不正です");
        $list[self::COMPANY_SEARCH_COMPANY_ID_NOT_NUMERIC] = array("code" => ErrorCode::COMPANY_SEARCH_COMPANY_ID_NOT_NUMERIC,"message" => "取引先の値が不正です");
        $list[self::COMPANY_SEARCH_USER_ID_NOT_NUMERIC] = array("code" => ErrorCode::COMPANY_SEARCH_USER_ID_NOT_NUMERIC,"message" => "担当者の値が不正です");

        $list[self::PICK_UP_SEARCH_BRANCH_CODE_NOT_NUMERIC] = array("code" => ErrorCode::PICK_UP_SEARCH_BRANCH_CODE_NOT_NUMERIC,"message" => "取引先支店名に不正な値です");
        $list[self::PICK_UP_SEARCH_USER_ID_NOT_NUMERIC] = array("code" => ErrorCode::PICK_UP_SEARCH_USER_ID_NOT_NUMERIC,"message" => "担当者の値が不正です");
        $list[self::PICK_UP_SEARCH_REGISTERED_TIME_FROM_NOT_DATE] = array("code" => ErrorCode::PICK_UP_SEARCH_REGISTERED_TIME_FROM_NOT_DATE,"message" => "ピックアップ日(From)には日付を入力してください");
        $list[self::PICK_UP_SEARCH_REGISTERED_TIME_TO_NOT_DATE] = array("code" => ErrorCode::PICK_UP_SEARCH_REGISTERED_TIME_TO_NOT_DATE,"message" => "ピックアップ日(To)には日付を入力してください");
        $list[self::PICK_UP_SEARCH_COMPANY_CODE_NOT_NUMERIC] = array("code" => ErrorCode::PICK_UP_SEARCH_COMPANY_CODE_NOT_NUMERIC,"message" => "取引先IDに数字以外の値が入力されました");
        $list[self::PICK_UP_SEARCH_PICK_UP_REASON_NOT_NUMERIC] = array("code" => ErrorCode::PICK_UP_SEARCH_PICK_UP_REASON_NOT_NUMERIC,"message" => "担当者の値が不正です");

        $list[self::BANK_USER_EDIT_BRANCH_CODE_REQUIRED] = array("code" => ErrorCode::BANK_USER_EDIT_BRANCH_CODE_REQUIRED,"message" => "取引支店リスト内の項目を指定してください");
        $list[self::BANK_USER_EDIT_BRANCH_CODE_NOT_NUMERIC] = array("code" => ErrorCode::BANK_USER_EDIT_BRANCH_CODE_NOT_NUMERIC,"message" => "取引支店に不正な値が入力されました");
        $list[self::BANK_USER_EDIT_MAIL_NOT_SAME_REENTER] = array("code" => ErrorCode::BANK_USER_EDIT_MAIL_NOT_SAME_REENTER,"message" => "同じメールアドレスを入力してください");
        $list[self::BANK_USER_EDIT_ROLE_CODE_REQUIRED] = array("code" => ErrorCode::BANK_USER_EDIT_ROLE_CODE_REQUIRED,"message" => "権限リスト内の項目を指定してください");
        $list[self::BANK_USER_EDIT_USER_CODE_REQUIRED] = array("code" => ErrorCode::BANK_USER_EDIT_USER_CODE_REQUIRED,"message" => "ユーザーIDのフィールドを入力してください");
        $list[self::BANK_USER_EDIT_IS_ROCK_REQUIRED] = array("code" => ErrorCode::BANK_USER_EDIT_IS_ROCK_REQUIRED,"message" => "値が不正です");
        $list[self::BANK_USER_EDIT_PASSWORD_REQUIRED] = array("code" => ErrorCode::BANK_USER_EDIT_PASSWORD_REQUIRED,"message" => "パスワードのフィールドを入力してください");
        $list[self::BANK_USER_EDIT_PASSWORD_CHANGE_DATE_NOT_DATE] = array("code" => ErrorCode::BANK_USER_EDIT_PASSWORD_CHANGE_DATE_NOT_DATE,"message" => "パスワード有効期限日の値が不正です");
        $list[self::BANK_USER_EDIT_MAIL_NOT_EMAIL_ADDRESS] = array("code" => ErrorCode::BANK_USER_EDIT_MAIL_NOT_EMAIL_ADDRESS,"message" => "メールアドレスが不正です");
        $list[self::BANK_USER_EDIT_ROLE_CODE_NOT_NUMERIC] = array("code" => ErrorCode::BANK_USER_EDIT_ROLE_CODE_NOT_NUMERIC,"message" => "権限の値が不正です");
        $list[self::BANK_USER_EDIT_PASSWORD_NOT_SAME_REENTER] = array("code" => ErrorCode::BANK_USER_EDIT_PASSWORD_NOT_SAME_REENTER,"message" => "同じパスワードを入力してください");
        $list[self::BANK_USER_EDIT_USER_CODE_UNIQUE] = array("code" => ErrorCode::BANK_USER_EDIT_USER_CODE_UNIQUE,"message" => "既に登録されているIDです。\nほかのIDを指定してください。");
        $list[self::BANK_USER_EDIT_PASSWORD_POLICY] = array("code" => ErrorCode::BANK_USER_EDIT_PASSWORD_POLICY,"message" => "パスワードポリシーに沿っていません");
        $list[self::BANK_USER_EDIT_PASSWORD_HISTORY_EXIST] = array("code" => ErrorCode::BANK_USER_EDIT_PASSWORD_HISTORY_EXIST,"message" => "過去使用したパスワードは設定できません。");


        $list[self::CONTENT_EMPTY]= array("code" => ErrorCode::CONTENT_EMPTY,"message" => "データがありません");
        $list[self::COUNT_EMPTY] = array("code" => ErrorCode::COUNT_EMPTY,"message" => "データがありません");
        $list[self::ACCOUNT_LOCK] = array("code" => ErrorCode::ACCOUNT_LOCK,"message" => "このユーザーはロックされています。\n管理者にお問い合わせください。");
        $list[self::UNKNOWN_ERROR] = array("code" => ErrorCode::UNKNOWN_ERROR,"message" => "予期せぬエラーが発生しました");
        $list[self::INVALID_REQUEST] = array("code" => ErrorCode::INVALID_REQUEST,"message" => "不正なリクエストです");

        return $list;
    }

    public function getCode(){
        return $this->list[$this->valueOf()]["code"];
    }

    public function getMessage(){
        return $this->list[$this->valueOf()]["message"];
    }

    /**
     * @return array
     * @throws \ReflectionException
     */
    public static function getList(): array{
        $list = array();
        $reflect = new \ReflectionClass(self::class);
        $const_arr = $reflect->getConstants();
        foreach ($const_arr as $item){
            array_push($list,new ErrorCode($item));
        }
        return $list;
    }
}

