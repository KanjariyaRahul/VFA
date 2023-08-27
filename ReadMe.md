
# VFA -AI Farming Technology

VFA is a farming technology platform where we work with farmers directly. We at VFA follow our mission of bridging the gap between technology and agriculture in India with a vision to reach out to maximum Indian farmers.


## Authors

- [@Hardik Kanajariya](https://github.com/3am-solver)
- [@Rahul Kanajariya](https://github.com/rahul9265)

## Color Reference

| Color             | Hex                                                                |
| ----------------- | ------------------------------------------------------------------ |
| Primary | ![#5f6dec](https://via.placeholder.com/10/5f6dec?text=+) #5f6dec |
| Danger | ![#ff7782](https://via.placeholder.com/10/ff7782?text=+) #ff7782 |
| Success | ![#41f1b6](https://via.placeholder.com/10/41f1b6?text=+) #41f1b6 |
| Warning | ![#ffbb55](https://via.placeholder.com/10/ffbb55?text=+) #ffbb55 |
| White | ![#fff](https://via.placeholder.com/10/fff?text=+) #fff |
| Info-dark | ![#7d8da1](https://via.placeholder.com/10/7d8da1?text=+) #7d8da1 |
| info-light | ![#dce1eb](https://via.placeholder.com/10/dce1eb?text=+) #dce1eb |
| dark | ![#363949](https://via.placeholder.com/10/363949?text=+) #363949 |
| primary-variant | ![#111e88](https://via.placeholder.com/10/111e88?text=+) #111e88 |
| dark-variant | ![#677483](https://via.placeholder.com/10/677483?text=+) #677483 |
| background | ![#f6f6f9](https://via.placeholder.com/10/f6f6f9?text=+) #f6f6f9 |


## Documentation

[Read Documentation](https://link-of-documentation-will-come-here)


## Environment Variables

To run this project, you will need to add the following environment variables to your config.php file

`SERVER`

`USERNAME`

`PASSWORD`

`DB_NAME`


## License

[FREE OPEN SOURCE](https://choosealicense.com/licenses/mit/)


## Feedback

If you have any feedback, please reach out to us at VFA2023@OUTLOOK.COM


## Roadmap

- Additional browser support

- Add more integrations


## Tech Stack

**Client:** PHP, JQUERY, TailwindCSS, BOOTSTRAP, CSS, JAVASCRIPT 

**Server:** MySQL


## API Reference

#### Get all items

```http
  GET /api/items
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `api_key` | `string` | **Required**. Your API key |

#### Get item

```http
  GET /api/items/${id}
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `id`      | `string` | **Required**. Id of item to fetch |


