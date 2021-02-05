<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id', 'username', 'image', 'about', 'address', 'phone', 'address','provider', 'provider_id',
        'status', 'dob', 'occupation', 'department', 'phone_status', 'home_status','email_status', 'name_status', 'verified', 'verified_otp', 'page_name'
    ];

        /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

        /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function hasRole()
    {
        return $this->role->name;
    }

    public function prayer_requests()
    {
        return $this->hasMany('App\PrayerRequest', 'user_id');
    }

        public function testimonies()
    {
        return $this->hasMany('App\Testimony', 'user_id');
    }

    public function memory_verses()
    {
        return $this->hasMany('App\MemoryVerse', 'user_id');
    }

        public function appointments()
    {
        return $this->hasMany('App\BookAppointment', 'user_id');
    }

    public function donates() {
        return $this->hasMany('App\Donate');
     }

         public function SocialAccounts()
    {
        return $this->hasMany(SocialAccount::class);
    }

    //     public function likes(){
    //   return $this->hasMany('App\Like');
    // }
    public function sermons(){
      return $this->hasMany('App\Sermon');
    }

    public function chats(){
      return $this->hasMany('App\Chat');
    }

    public function forum(){
      return $this->hasMany('App\Forum');
    }

    public function forumMessage(){
      return $this->hasMany('App\ForumMessage', 'sender_id');
    }

    public function department_members(){
        return $this->hasMany('App\DepartmentMember');
      }
	  public function chatMessage(){
        return $this->hasMany('App\ChatMessage', 'sender_id');
      }

}
