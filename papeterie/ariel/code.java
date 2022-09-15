URL url = new URL("https://ariel.pfregistres.com/apiUnlocked/all/{siren}");

HttpURLConnection connection = (HttpURLConnection) url.openConnection();

connection.setRequestProperty("accept", "application/json");

InputStream responseStream = connection.getInputStream();

ObjectMapper mapper = new ObjectMapper();
APOD apod = mapper.readValue(responseStream, APOD.class);

System.out.println(apod.title);