# About Project

### Project's Title

> Travelling  
> http://api-traveling.rocketsystems.net/

### Project's Description

> This is project API for flights and hotels booking.  
> PHP version: 8.2  
> Laravel version: 10.0   
> Database is: MySql

### How to Install and Run the Project

> `cd /var/www`  
> `git clone https://github.com/vardshushan/travelling-api.git`  
> `cd travelling-api`  
> `composer install`  
> `php artisan migrate`  
> `php artisan db:seed --class=UserSeeder`

> `sudo ./vendor/bin/sail artisan `
# API's

## Auth

<details><summary>Register</summary>

- **Method:** POST
- **URL:**    http://api-traveling.rocketsystems.net/api/register
- **Parameters:**

```json
{
    "first_name": "string",
    "last_name": "string",
    "email": "string",
    "password": "string",
    "password_confirmation": "string"
}
```

- **Success Message:**

 ```json
{
    "success": true,
    "data": {
        "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIzIiwianRpIjoiODFmYzM4ZjBhN2NmYzJjMWEzMzI4ZmExZjg4NmFlODkwNTlmNmU4ZmUzNWQwYmYwN2I1ODU0MTBmMmQ0MzRjNzBlNzA1N2E0ODc4ZTk4YjEiLCJpYXQiOjE2ODA2MTY2NTEuOTU1OTU4LCJuYmYiOjE2ODA2MTY2NTEuOTU1OTU5LCJleHAiOjE3MTIyMzkwNTEuOTUzNjE1LCJzdWIiOiIxMiIsInNjb3BlcyI6W119.oDP24W5i4gxCwtagIt0OmMIpXe4YU9D5LD_O4kCWh5vxb872MHIU08BhLzOrj2fsZu4i6Z48gcveuZ9USla9Ty_PgZ2ibzGWH4v9EfILRxz8MPeLrvlCGMUaG1UfLcd2Ls6sb8PCYzT6EnnQfKYnyTnESN55u22kpcICpVUcDoPNIvL_58x0JXK6dF1nbEBigp0Md2rcHOEpcG6LkO7T7VcinC96JGNSRYdoeoUkWO0rZ4aBcRISHC7iZVN6krE5RxYCPB52LQbyADWG2FgeowJVEthRN6sKWWzIiXjTi9kZGn1WqNjvAEI_VZqh_jqGfNqgaGTctqVIFRBbDhB1V6OgUYD4MJjYlKM73d6U4EHtEejPHHsCX4jdITbjrpQmuwsFMYdPn5EsdEp7yBNEt2Uv7R8NE8Rfr665O8Dy5glCLzVswqGErdMk9ORPgln-8E0fVO7-ONEsaE7q82-esb9w5WuaSkpV7KpvNmaqzZ22KWbAaRlfYu1OwLmw9my8zRNnCImIdlg4vxjNaxalyrHk-FkQ7wYIC4FJj7RnaQEh767Pts4nG3_1vklF7WrHlr1S9ZLiiVjZpt6sa__diY4rFJcu-y6PVXTUSEeRJFKuh272TG-B9wNT6eWQp5IQt-Dy0zCRX_uDGBlPq2dWRD1DXmOAe6h9vy2lRqPMULk",
        "first_name": "string",
        "last_name": "string"
    },
    "message": "User register successfully."
}
```

- **Error Message:**

 ```json
{
    "success": false,
    "message": "Validation errors",
    "data": {
        "email": [
            "The email has already been taken."
        ]
    }
}
```

</details>
<details><summary>Login</summary>

- **Method:** POST
- **URL:**    http://api-traveling.rocketsystems.net/api/login
- **Parameters:**

```json
{
    "email": "string",
    "password": "string"
}
```

- **Success Message:**

 ```json
{
    "success": true,
    "data": {
        "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIzIiwianRpIjoiZmRlMTRiZGY4MTkwYWNmMzFmNDMwMTJkNDIzZDc4NWM4NjEwZjEyZDgwMDEyZThlMTI3NjM5Yzk1YmY4ZjA0YmEyZmM3YmNlM2IzMGE5ODUiLCJpYXQiOjE2ODA2MTM3ODMuNTk4OTcsIm5iZiI6MTY4MDYxMzc4My41OTg5NzIsImV4cCI6MTcxMjIzNjE4My41OTYzMTUsInN1YiI6IjgiLCJzY29wZXMiOltdfQ.M8Fay3xN8Ie92NwLcB23u-UXIJVDme4Mh7oo6BrUBbw2yCvAIVSqTlij7EQr_b0adViOmLdSih4sgRDPIW5K6kiUVpL2dYNE911exOIh-5m2yN0zKa9GaJOGf5cHeWm_xMVezeyyyzuoxwi9n_yKfSPPbHtoOt9fAr3nPnFsaiUcciquQb8DFx8syFhG80fg4Shrvck9gW679wJvlhPTQkWY18OkNFM5MAfiguvoTSV7I9oVNUQswPgbcOXOZnRX__NJSuovw8PVEISj5LUCGn086k4MWyby1DwrvFBGD-Rd6qEip7STQJw0eNmhROM327wWvDR_5S7OSFyoeK6IKcrjA0wxGk6i8_WH7PPPS0C9ESqNuXWv1jGUQQU307_kqqvJ0MUrw7dLduy_XXG9dbYkCy54TV7CZW_OXNl6uxs2FjXDhxP8CvzdqflMzngJDe1BaPqa1BHX9cv1wKs9Idd6TfNEau1I_GNU9zhnEgqVkJdxycAZ_4AV6j3MyzT0Uzk2vZvkkzZs_HmMW4QsBmaknzzN1i5-Qtj3OoN5kqzGRvumgGSeAl4ELlEiMPNs71sfSrLNJmF31porlO9mlUw4SpfA54LJIwKQMI_uefK47i3Thv0TzRoVudr8I_WSs0tb1_XaQQO2IT5uI-Z2qM_fZgSdQ6Z7ZVorAsxGSvo",
        "first_name": "string",
        "last_name": "string"
    },
    "message": "User login successfully."
}
```

- **Error Message:**

 ```json
{
    "success": false,
    "message": "Unauthorised.",
    "data": {
        "error": "Unauthorised"
    }
}
```

</details>


<details><summary>ask question to Chat Openai</summary>

- **Method:** POST
- **URL:**    http://api-traveling.rocketsystems.net/api/open-ai
- **Parameters:**

```json
{
    "search": "string-ask question."
}
```

- **Success Message:**

 ```json
{
    "role": "assistant",
    "content": "As an AI language model, I don't have personal preferences or the ability to recommend hotels based on my experiences. However, here are some of the top-rated hotels in Armenia according to TripAdvisor:\n\n1. The Alexander Hotel - Yerevan\n2. Grand Hotel Yerevan - Yerevan\n3. Hyatt Place Yerevan - Yerevan\n4. Tufenkian Historic Yerevan Hotel - Yerevan\n5. Ani Plaza Hotel - Yerevan\n6. Ararat Resort Tsaghkadzor - Tsaghkadzor\n7. Best Western Plus Paradise Hotel Dilijan - Dilijan\n8. Multi Grand Pharaon Hotel - Tsaghkadzor\n9. Armenia Marriott Hotel Yerevan - Yerevan\n10. Golden Palace Hotel Resort & Spa GL - Tsaghkadzor"
}
```

- **Error Message:**

 ```json
{
    "error": "Client error: `POST https://api.openai.com/v1/chat/completions` resulted in a `400 Bad Request` response:\n{\n  \"error\": {\n    \"message\": \"None is not of type 'string' - 'messages.0.content'\",\n    \"type\": \"invalid_request_error\" (truncated...)\n"
}
```

</details>
