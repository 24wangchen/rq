<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id
 * @property string $account
 * @property string $nickname
 * @property string $password
 * @property string $bind_account
 * @property string $last_login_time
 * @property string $last_login_ip
 * @property integer $login_count
 * @property string $verify
 * @property string $email
 * @property string $remark
 * @property string $create_time
 * @property string $update_time
 * @property integer $status
 * @property integer $type_id
 * @property string $info
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('account, nickname, password, bind_account, email, remark, create_time, update_time, info', 'required'),
			array('login_count, status, type_id', 'numerical', 'integerOnly'=>true),
			array('account', 'length', 'max'=>64),
			array('nickname, bind_account, email', 'length', 'max'=>50),
			array('password, verify', 'length', 'max'=>32),
			array('last_login_time, create_time, update_time', 'length', 'max'=>11),
			array('last_login_ip', 'length', 'max'=>40),
			array('remark', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, account, nickname, password, bind_account, last_login_time, last_login_ip, login_count, verify, email, remark, create_time, update_time, status, type_id, info', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'account' => 'Account',
			'nickname' => 'Nickname',
			'password' => 'Password',
			'bind_account' => 'Bind Account',
			'last_login_time' => 'Last Login Time',
			'last_login_ip' => 'Last Login Ip',
			'login_count' => 'Login Count',
			'verify' => 'Verify',
			'email' => 'Email',
			'remark' => 'Remark',
			'create_time' => 'Create Time',
			'update_time' => 'Update Time',
			'status' => 'Status',
			'type_id' => 'Type',
			'info' => 'Info',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('account',$this->account,true);
		$criteria->compare('nickname',$this->nickname,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('bind_account',$this->bind_account,true);
		$criteria->compare('last_login_time',$this->last_login_time,true);
		$criteria->compare('last_login_ip',$this->last_login_ip,true);
		$criteria->compare('login_count',$this->login_count);
		$criteria->compare('verify',$this->verify,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('remark',$this->remark,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('type_id',$this->type_id);
		$criteria->compare('info',$this->info,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}