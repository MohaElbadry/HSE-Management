import { Text, View, TouchableOpacity } from "react-native";
import { AntDesign } from "@expo/vector-icons";
import { Entypo } from "@expo/vector-icons";
import { Ionicons } from "@expo/vector-icons";

export default function Projet({ navigation }) {
    return (
        <View
            className="flex-1  "
            style={{
                backgroundColor: "#F6F6F6",
            }}
        >
            <View className=" flex  w-full flex-row justify-between rounded-b-3xl bg-[#1B2223] px-4 pb-8 pt-16 drop-shadow-xl">
                <AntDesign
                    name="arrowleft"
                    size={24}
                    color="white"
                    onPress={() => navigation.goBack()}
                />
                <Text className="text-start text-xl font-extrabold text-white"></Text>
                <Text className="text-xl font-extrabold  text-[#4DCFC0]">
                    {"  "}
                </Text>
            </View>

            <View className="mt-24 flex items-center justify-center pl-5">
                <TouchableOpacity
                    className="mb-4 rounded-2xl bg-[#32E0C4] p-3  shadow-xl"
                    onPress={() => navigation.navigate("AddIncident")}
                >
                    <Text className="px-4 py-2 text-3xl font-semibold text-[#2D2727]">
                        Add incidenet
                    </Text>
                </TouchableOpacity>
                <TouchableOpacity
                    className="mb-4 rounded-2xl  bg-[#F15412] p-3  shadow-xl"
                    onPress={() => navigation.navigate("AddRisk")}
                >
                    <Text className="px-4 py-2 text-3xl font-semibold text-[#6F0000]">
                        Add Risk
                    </Text>
                </TouchableOpacity>
                <TouchableOpacity
                    className="mb-4 rounded-2xl  bg-[#D21312]  p-3  shadow-xl"
                    onPress={() => navigation.navigate("AddEmergencie")}
                >
                    <Text className="px-4 py-2 text-3xl font-semibold text-[#F0EB8D]">
                        Add Emergencie
                    </Text>
                </TouchableOpacity>
            </View>

            <View className="absolute -bottom-0 h-14 w-full self-center rounded-2xl bg-white p-3 ">
                <View className="flex-row items-center  justify-center justify-items-center  space-x-10 align-middle">
                    <TouchableOpacity
                        onPress={() => navigation.navigate("Home_Screen")}
                    >
                        <AntDesign name="home" size={24} color="black" />
                    </TouchableOpacity>
                    <TouchableOpacity onPress={() => navigation.navigate("")}>
                        <Entypo name="list" size={24} color="black" />
                    </TouchableOpacity>

                    <TouchableOpacity
                        onPress={() => navigation.navigate("Add")}
                    >
                        <View className=" flex h-10 w-10 items-center justify-center rounded-full bg-[#FF0000]">
                            <AntDesign
                                name="pluscircleo"
                                size={28}
                                color="white"
                            />
                        </View>
                    </TouchableOpacity>

                    <TouchableOpacity
                        onPress={() =>
                            navigation.navigate("Pat_List_Traitement")
                        }
                    >
                        <Ionicons
                            name="chatbox-outline"
                            size={24}
                            color="black"
                        />
                    </TouchableOpacity>
                    <TouchableOpacity
                        onPress={() => navigation.navigate("Pat_Profile")}
                    >
                        <AntDesign name="user" size={26} color="black" />
                    </TouchableOpacity>
                </View>
            </View>
        </View>
    );
}
