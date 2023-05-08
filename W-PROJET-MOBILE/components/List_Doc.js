import {
  StyleSheet,
  Text,
  View,
  FlatList,
  Image,
  Dimensions,
  TouchableOpacity,
} from "react-native";
import React, { useEffect, useState } from "react";
import axios from "axios";
import { API_BASE_URL } from "../IP.js";
const WIDTH = Dimensions.get("window").width - 30;

const datas = [
  {
    id: "123",
    title: "Abdlomghit",
    image:
      "https://img.freepik.com/free-vector/doctor-with-glasses-holding-clipboard_23-2147791170.jpg?w=996&t=st=1681957637~exp=1681958237~hmac=5debf22db2a6a5c9a4ea3ec44983b4079f8172169478a52917ef5958003205fe",
    // "https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80",
    msg: "Hello thh!",
    time: "07:30",
    date: new Date().toLocaleDateString(),
    about:
      "Ex- Professor & Head of Department Department of Neurosurgery Dhaka Medical College & Hospital Ex- Professor & Head of Department Department of Neurosurgery Dhaka Medical College & Hospital",
  },
];

export default function List_Doc({ navigation }) {
  const [Docs, setDocs] = useState([]);

  useEffect(() => {
    const fetchDataDoctor = async () => {
      try {
        const response = await axios.get(`${API_BASE_URL}/doctor/readall`);
        const data = response.data;
        setDocs(data);
      } catch (error) {
        console.error(error);
      }
    };
    fetchDataDoctor();
  }, []);

  return (
    <View>
      <FlatList
        style={styles.chatFlatList}
        data={Docs}
        keyExtractor={(item) => item.id}
        showsHorizontalScrollIndicator={false}
        renderItem={({ item }) => (
          <TouchableOpacity
            style={styles.chatContainer}
            onPress={() => navigation.navigate("Pat_Med_Profile", { item })}
          >
            <Image
              style={{
                width: 64,
                height: 64,
                resizeMode: "contain",
                borderRadius: 15,
              }}
              source={{
                uri: "https://img.freepik.com/free-vector/doctor-with-glasses-holding-clipboard_23-2147791170.jpg?w=996&t=st=1681957637~exp=1681958237~hmac=5debf22db2a6a5c9a4ea3ec44983b4079f8172169478a52917ef5958003205fe",
              }}
            />

            <View style={styles.chatTextContainer}>
              <View style={styles.chatTextTop}>
                <Text style={styles.title}>
                  {item.nom} {item.prenom}
                </Text>
              </View>
              <View style={styles.chatTextBottom}>
                <Text style={styles.msg}>{item.email}</Text>
                <Text style={styles.msg}>{item.specialite.libelle}</Text>
              </View>
            </View>
          </TouchableOpacity>
        )}
      />
    </View>
  );
}

const styles = StyleSheet.create({
  chatFlatList: {
    marginBottom: 60,
  },
  chatContainer: {
    flexDirection: "row",
    marginHorizontal: 20,
    marginVertical: 14,
  },
  chatTextContainer: {
    marginLeft: 10,
    marginTop: 5,
  },
  chatTextTop: {
    flexDirection: "row",
    justifyContent: "space-between",
    width: WIDTH * 0.8,
  },
  chatTextBottom: {
    justifyContent: "space-between",
    width: WIDTH * 0.8,
  },
  title: {
    fontSize: 17,
    fontWeight: "bold",
  },
  time: {
    fontSize: 13,
  },
  msg: {
    marginLeft: 5,
    fontSize: 13,
    color: "darkgray",
  },
});
