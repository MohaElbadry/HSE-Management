import {
    StyleSheet,
    Text,
    View,
    FlatList,
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
        date: new Date().toLocaleDateString(),
        description:
            "Ex- Professor & Head of Department Department of Neurosurgery Dhaka Medical College & Hospital Ex- Professor & Head of Department Department of Neurosurgery Dhaka Medical College & Hospital",
    },
];

export default function List_Doc({ navigation }) {
    const [Docs, setDocs] = useState([]);

    // useEffect(() => {
    //     const fetchDataDoctor = async () => {
    //         try {
    //             const response = await axios.get(
    //                 `${API_BASE_URL}/doctor/readall`
    //             );
    //             const data = response.data;
    //             setDocs(data);
    //         } catch (error) {
    //             console.error(error);
    //         }
    //     };
    // }, []);

    return (
        <View>
            <FlatList
                style={styles.chatFlatList}
                data={datas}
                keyExtractor={(item) => item.id}
                showsHorizontalScrollIndicator={false}
                renderItem={({ item }) => (
                    <TouchableOpacity
                        style={styles.chatContainer}
                        onPress={() =>
                            navigation.navigate("Pat_Med_Profile", { item })
                        }
                    >
                        <View style={styles.chatTextContainer}>
                            <View style={styles.chatTextTop}>
                                <Text style={styles.title}>
                                    {item.nom} {item.prenom}
                                </Text>
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
